<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\Membership;

class MembershipController extends Controller
{/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {  $this->middleware('auth');
      
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membership = DB::table('institution_membership')
        ->select('institution_membership.*')
        ->paginate(10);

        return view('membership/index', ['membership' => $membership]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
      
     
        $membership = Membership::all();
        return view('membership/create', ['membership' => $membership]);
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
        // Upload image
        $path = $request->file('picture')->store('avatars');
        $keys = ['organization_name', 'trading_name', 'business_type', 'trading_name', 'others', 'business', 'country' , 'city','district', 'cell_phone','title',
        'surname','firstname', 'other_name','job_title','email','board_members','commitees','benefit','declaration'];
        $input = $this->createQueryInput($keys, $request);
        $input['picture'] = $path;
        // Not implement yet
        // $input['company_id'] = 0;
        Membership::create($input);

        return redirect()->intended('/membership');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        // Find the client
        $membership = Membership::find($id);

        // Return back to client details
        return view('membership.details', compact('membership'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membership = Membership::find($id);
        // Redirect to state list if updating state wasn't existed
        if ($membership == null) {
            return redirect()->intended('/membership');
        }
       
        return view('membership/edit', ['membership' => $membership]);
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
        $membership = Membership::findOrFail($id);
        $this->validateInput($request);
        // Upload image
        $path = $request->file('picture')->store('avatars');
        $keys = ['organization_name', 'trading_name', 'business_type', 'trading_name', 'others', 'business', 'country' , 'city','district', 'cell_phone','title',
        'surname','firstname', 'other_name','job_title','email','board_members','commitees','benefit'];
        $input = $this->createQueryInput($keys, $request);
        if ($request->file('picture')) {
            $path = $request->file('picture')->store('avatars');
            $input['picture'] = $path;
        }

        Membership::where('id', $id)
            ->update($input);

        return redirect()->intended('/membership');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Employee::where('id', $id)->delete();
         return redirect()->intended('/membership');
    }

    /**
     * Search state from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $constraints = [
            'surname' => $request['surname']
            ];
        $membership = $this->doSearchingQuery($constraints);
       
        return view('membership/index', ['membership' => $membership, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = DB::table('membership')
        ->select('memership.surname as employee_name', 'membership.*');
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where($fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }

     /**
     * Load image resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function load($name) {
         $path = storage_path().'/app/avatars/'.$name;
        if (file_exists($path)) {
            return Response::download($path);
        }
    }

    private function validateInput($request) {
        $this->validate($request, [
       
            'trading_name' => 'required|max:60',
            'business_type' => 'required|max:60',
            'others' => 'required|max:120',
            'country' => 'required|max:60',
            'city' => 'required',
            'district' => 'required',
            'cell_phone' => 'required',
            'title' => 'required',
            'other_name' => 'required',
            'job_title' => 'required',
            'email' => 'required',
            'board_members' => 'required'
          
            
            
            
            
            
            
           
        ]);
    }

    private function createQueryInput($keys, $request) {
        $queryInput = [];
        for($i = 0; $i < sizeof($keys); $i++) {
            $key = $keys[$i];
            $queryInput[$key] = $request[$key];
        }

        return $queryInput;
    }
}
