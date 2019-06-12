<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;
class CompaniesController extends Controller
{/**
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
        $companies = Company::paginate(5);

        return view('system-mgmt/companies/index', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system-mgmt/companies/create');
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
         Company::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'tin_number' => $request['tin_number']
        ]);

        return redirect()->intended('system-management/companies');
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
        $companies = Company::find($id);
        // Redirect to department list if updating department wasn't existed
        if ($companies == null) {
            return redirect()->intended('/system-management/companies');
        }

        return view('system-mgmt/companies/edit', ['companies' => $companies]);
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
        $companies = Company::findOrFail($id);
        $this->validateInput($request);
        $input = [
            'name' => $request['name'],
            'address' => $request['address'],
            'tin_number' => $request['tin_number']
        ];
        Company::where('id', $id)
            ->update($input);
        
        return redirect()->intended('system-management/companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::where('id', $id)->delete();
         return redirect()->intended('system-management/companies');
    }

    /**
     * Search department from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $constraints = [
            'name' => $request['name'],
            'address' => $request['address'],
            'tin_number' => $request['tin_number']
            ];

       $companies = $this->doSearchingQuery($constraints);
       return view('system-mgmt/companies/index', ['companies' => $companies, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = Company::query();
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
        'name' => 'required|max:60|unique:companies',
        'address' => 'required|max:60|unique:companies',
        'tin_number' => 'required|max:60|unique:companies'
    ]);
    }
}
