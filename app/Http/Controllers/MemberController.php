<?php

namespace App\Http\Controllers;
use App\Biography;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Response;
use App\Employee;


class MemberController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {// $cities = City::all();
        // $states = State::all();
        $employees = Employee::all();
        return view('member/create', ['employees' => $employees]);
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
        $path = $request->file('picture')->store('avatars');
        $keys = ['title', 'surname', 'othername','email','genda', 'birthdate', 'nationality', 'region' , 'professional_qualification','profession', 'occupation','current_position',
        'age','status', 'sector','marital_status','religion','children','industry','cv','experience','critical_skills','current_directorship','qualification','trainings','availability','adverse_circumstances','contact'];
        $input = $this->createQueryInput($keys, $request);
        $input['picture'] = $path;
        // Not implement yet
        // $input['company_id'] = 0;
        Employee::create($input);

        return redirect('/bio');
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
         return redirect()->intended('/member');
    }

    /**
     * Search state from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    

    private function validateInput($request) {
        $this->validate($request, [
            'title' => 'required|max:60',
            'surname' => 'required|max:60',
            'othername' => 'required|max:60',
            'genda' => 'required|max:120',
            'birthdate' => 'required',
            'nationality' => 'required|max:60',
            'region' => 'required',
            'contact' => 'required',
            'professional_qualification' => 'required',
            'experience' => 'required',
            'critical_skills' => 'required',
            'profession' => 'required',
            'occupation' => 'required',
            'qualification' => 'required',
            'current_directorship' => 'required',
            'trainings' => 'required',
            'current_position' => 'required',
            'sector' => 'required',
            'status' => 'required',
            'age' => 'required',
            'cv' => 'required',
            'marital_status' => 'required',
            'religion' => 'required',
            'children' => 'required'
            
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
