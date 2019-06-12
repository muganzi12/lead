<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use App\Client;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class ClientsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // Find All clients and passing to clients
        $clients = Client::all();

        // Redirect to Clients page
        return view('clients.index', compact('clients'));
    }



    public function create()
    {
        // Instance of Client
        $client = new Client();

        // Redirect to client page, along with passing client object into Array
        return view('clients.create', compact('client'));
    }

    public function store(Request $request)
    {
        // Validate the form
        $input = Input::all();
        $validation = Validator::make( $request->all(), [
            'name'=>'required|max:40',
            'email' => 'required|email',
            'phone' => 'required',
            'file' => 'required|max:100040'
        ]);
      

        // Check if there is any file
      
        // Store into Database
        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'file' => $request->file->getClientOriginalName()
        ]);
        if ($validation->fails()) {
            return Redirect::to('/')->with('message', $validation->errors->first());
        }
        
        
           $file = array_get($input,'file');
           // SET UPLOAD PATH 
            $destinationPath = 'uploads'; 
            // GET THE FILE EXTENSION
            $extension = $file->getClientOriginalExtension(); 
            // RENAME THE UPLOAD WITH RANDOM NUMBER 
            $fileName = rand(11111, 99999) . '.' . $extension; 
            // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY 
            $upload_success = $file->move($destinationPath, $fileName); 
        
        // IF UPLOAD IS SUCCESSFUL SEND SUCCESS MESSAGE OTHERWISE SEND ERROR MESSAGE
        

        // Stored a Message in session
        $request->session()->flash('msg', 'Client has been added');

        // Redirect back to Clients
        return redirect('/clients');
    }

    public function show($id)
    {
        // Find the client
        return response()->download(storage_path('app/public/uploads/' . $file));
    }

    public function edit($id)
    {
        // Find the client
        $client = Client::find($id);

        // Redirect to Edit client
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        // Find the client
        $client = Client::find($id);

        // Validate the form
        $validation = Validator::make( $request->all(), [
            'name'=>'required|max:40',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
      

        // Check if there is any image,
        if ($request->hasFile('file')) {
            // Check if file exists
            if (file_exists(public_path('uploads/') . $client->file)) {
                // Delete an old image
                unlink(public_path('uploads/') . $client->file);
            }

            // Get and Upload new image
            $file = $request->file;
            $file->move("uploads", $file->getClientOriginalName());

            $client->file = $request->file->getClientOriginalName();
        }

        // Updating Clients
        $client->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'file' => $client->file,
        ]);

        // Store a message in session
        request()->session()->flash('msg', 'Client has been updated');

        // Redirect to Clients
        return redirect('clients');
    }

    public function destroy($id)
    {
        // Find the client
        Client::destroy($id);

        // Store a message n session
        request()->session()->flash('msg', 'Client has been deleted');

        // Redirect back to Clients
        return redirect('clients');
    }
}
