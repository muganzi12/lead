<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\EventsRegistration;


class EventsRegistrationController extends Controller
{
    //

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = EventsRegistration::paginate(5);

        return view('registrations/index', ['registrations' => $registrations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrations/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateInput($request);
         EventsRegistration::create([
            'fsname' => $request['fsname'],
            'lsname' => $request['lsname'],
            'email' => $request['email'],
            'phone' => $request['phone']

        ]);

        return redirect()->intended('registrations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registrations = EventsRegistration::find($id);
        // Redirect to department list if updating department wasn't existed
        if ($registrations == null) {
            return redirect()->intended('/registrations');
        }

        return view('registrations/edit', ['registrations' => $registrations]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registrations = EventsRegistration::findOrFail($id);
        $this->validateInput($request);
        $input = [
            'fsname' => $request['fsname'],
            'lsname' => $request['lsname'],
            'email' => $request['email'],
            'phone' => $request['phone']

        ];
       EventsRegistration::where('id', $id)
            ->update($input);
        
        return redirect()->intended('registrations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EventsRegistration::where('id', $id)->delete();
         return redirect()->intended('registrations');
    }

    /**
     * Search department from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $constraints = [
            'fsname' => $request['fsname'],
            'lsname' => $request['lsname'],
            'email' => $request['email'],
            'phone' => $request['phone']

            ];

       $registrations = $this->doSearchingQuery($constraints);
       return view('registrations/index', ['registrations' => $registrations, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = eventsregistration::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where( $fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }
    private function validateInput($request) {
        $this->validate($request, [
        'fsname' => 'required|max:60|unique:registrations',
        'lsname' => 'required|max:60|unique:registrations',
        'email' => 'required|max:60|unique:registrations',
        'phone' => 'required|max:60|unique:registrations'
    ]);
    }
}
