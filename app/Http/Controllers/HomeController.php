<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lodge;
use Auth;
use App\Feedback;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){

        $lodge=Lodge::all();
        
        return view('contact')->with(['lodgeData'=>$lodge]);
    }
    public function aboutUs(){
        return view('aboutUs');
    }
    public function gallery(){
        return view('gallery');
    }
    public function feedback(){
        $email=Auth::user()->email;
        $userFeedback=Feedback::where('email',$email)->latest()->get();
        return view('feedback')->with(['userfeedback'=>$userFeedback],200);
    }
}
