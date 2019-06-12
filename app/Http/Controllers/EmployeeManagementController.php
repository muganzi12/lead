<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\Employee;


class EmployeeManagementController extends Controller
{
    /**
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
        $employees = DB::table('employees')
        ->select('employees.*', 'employees.status as employees_status')
        ->paginate(10);

        return view('employees-mgmt/index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
      
     
        $employees = Employee::all();
        return view('employees-mgmt/create', ['employees' => $employees]);
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
        $keys = ['title', 'surname', 'othername', 'genda', 'email','birthdate', 'nationality', 'region' , 'professional_qualification','profession', 'occupation','current_position',
        'age','status', 'sector','marital_status','religion','children','industry','cv','experience','critical_skills','current_directorship','declaration','qualification','trainings','availability','adverse_circumstances','contact'];
        $input = $this->createQueryInput($keys, $request);
        $input['picture'] = $path;
        // Not implement yet
        // $input['company_id'] = 0;
        Employee::create($input);

        return redirect()->intended('/employee-management');
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
        $employee = Employee::find($id);

        // Return back to client details
        return view('employees-mgmt.details', compact('employee'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        // Redirect to state list if updating state wasn't existed
        if ($employee == null) {
            return redirect()->intended('/employee-management');
        }
       
        return view('employees-mgmt/edit', ['employee' => $employee]);
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
        $employee = Employee::findOrFail($id);
        $this->validateInput($request);
        // Upload image
        $path = $request->file('picture')->store('avatars');
        $keys = ['title', 'surname', 'othername', 'genda','email','birthdate', 'nationality', 'region' , 'professional_qualification','profession', 'occupation','current_position',
        'age','status', 'sector','religion','industry','cv','experience','critical_skills','current_directorship','qualification','trainings','availability','adverse_circumstances','contact'];
        $input = $this->createQueryInput($keys, $request);
        if ($request->file('picture')) {
            $path = $request->file('picture')->store('avatars');
            $input['picture'] = $path;
        }

        Employee::where('id', $id)
            ->update($input);

        return redirect()->intended('/employee-management');
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
         return redirect()->intended('/employee-management');
    }

    /**
     * Search state from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $constraints = [
            'surname' => $request['firstname']
            ];
        $employees = $this->doSearchingQuery($constraints);
       
        return view('employees-mgmt/index', ['employees' => $employees, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = DB::table('employees')
        ->select('employees.surname as employee_name', 'employees.*');
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
            'title' => 'required|max:60',
            'surname' => 'required|max:60',
            'othername' => 'required|max:60',
            'genda' => 'required|max:120',
            'birthdate' => 'required|max:60',
            'nationality' => 'required|max:60',
            'region' => 'required|max:60',
            'contact' => 'required|max:60',
            'professional_qualification' => 'required|max:60',
            'experience' => 'required|max:60',
            'critical_skills' => 'required|max:60',
            'profession' => 'required|max:60',
            'occupation' => 'required|max:60',
            'qualification' => 'required|max:60',
            'current_directorship' => 'required|max:60',
            'trainings' => 'required|max:60',
            'current_position' => 'required|max:60',
            'sector' => 'required|max:60',
            'status' => 'required|max:60',
            'age' => 'required|max:60',
            'cv' => 'required|max:60',
            'religion' => 'required|max:60',
            'children' => 'required|max:60'
            
            
            
            
           
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
