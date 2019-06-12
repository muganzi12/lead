<?php
namespace App\Http\Controllers;
use App\Biography;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;
use App\Employee;
use App\City;
use App\State;
use App\Country;
use App\Department;
use App\Division;
class BiographyController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = DB::table('employees')
       
        ->select('employees.*')->where('status','=',1)
        ->paginate(12);

        return view('bio/index', ['employees' => $employees]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Auth::check()) {
            $bio = Biography::where('id', Auth::user()->id)->get();
            return view('bio.create');
        }
        return view('auth.login');
        //return view('companies.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validateInput($request);
        // Upload image
        $path = $request->file('picture')->store('avatars');
        $keys = ['lastname', 'firstname', 'middlename', 'address', 'city_id', 'state_id', 'country_id', 'zip',
        'age', 'birthdate', 'date_hired', 'department_id', 'department_id'];
        $input = $this->createQueryInput($keys, $request);
        $input['picture'] = $path;
        // Not implement yet
        // $input['company_id'] = 0;
        Employee::create($input);

        return redirect()->intended('/bio');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Biography  $bio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    
       
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biography  $bio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Employee::find($id);
        // Redirect to state list if updating state wasn't existed
        if ($employee == null){
            return redirect()->intended('/bio');
        }
        $cities = City::all();
        $states = State::all();
        $countries = Country::all();
        $departments = Department::all();
        $divisions = Division::all();
        return view('bio/edit', ['employee' => $employee, 'cities' => $cities, 'states' => $states, 'countries' => $countries,
        'departments' => $departments]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biography  $bio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biography $bio)
    {
        $employee = Employee::findOrFail($id);
        $this->validateInput($request);
        // Upload image
        $keys = ['lastname', 'firstname', 'middlename', 'address', 'city_id', 'state_id', 'country_id', 'zip',
        'age', 'birthdate', 'date_hired', 'department_id'];
        $input = $this->createQueryInput($keys, $request);
        if ($request->file('picture')) {
            $path = $request->file('picture')->store('avatars');
            $input['picture'] = $path;
        }

        Employee::where('id', $id)
            ->update($input);

        return redirect()->intended('/bio');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biography  $bio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biography $bio)
    {
        Employee::where('id', $id)->delete();
        return redirect()->intended('/bio');
    }

    public function search(Request $request) {
        $constraints = [
            'firstname' => $request['firstname'],
            'age' => $request['age']
            ];
        $employees = $this->doSearchingQuery($constraints);
     
        return view('bio/index', ['employees' => $employees, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = DB::table('employees')
        ->leftJoin('city', 'employees.city_id', '=', 'city.id')
        ->leftJoin('department', 'employees.department_id', '=', 'department.id')
        ->leftJoin('state', 'employees.state_id', '=', 'state.id')
        ->leftJoin('country', 'employees.country_id', '=', 'country.id')
        ->select('employees.firstname as employee_name', 'employees.*','department.name as department_name', 'department.id as department_id');
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where($fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(6);
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

}