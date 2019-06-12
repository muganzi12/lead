<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\Membership;


class InstitutionalController extends Controller
{
    
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
      
     
        $membership = Membership::all();
        return view('institution/create', ['membership' => $membership]);
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
         Membership::where('id', $id)->delete();
         return redirect()->intended('/institution');
    }

    /**
     * Search state from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
   

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
            'organization_name' => 'required|max:60',
            'trading_name' => 'required|max:60',
            'business_type' => 'required|max:60',
            'others' => 'required|max:120',
            'business' => 'required',
            'country' => 'required|max:60',
            'city' => 'required',
            'district' => 'required',
            'cell_phone' => 'required',
            'title' => 'required',
            'surname' => 'required',
            'firstname' => 'required',
            'other_name' => 'required',
            'job_title' => 'required',
            'email' => 'required',
            'board_members' => 'required',
            'commitees' => 'required',
            'benefit' => 'required',
            'declaration' => 'required'
            
            
            
            
            
            
           
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
