<?php
namespace App\Http\Controllers;
use App\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::check()) {
            $events = Events::where('id', Auth::user()->id)->get();
            return view('events.index', ['events'=>$events]);
        }
        return view('auth.login');
    }

    public function show($id)
    {
        //
    }
  
  
}