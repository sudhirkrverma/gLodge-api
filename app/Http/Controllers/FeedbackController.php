<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use Session;
use Auth;

class FeedbackController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function submit(Request $request){
        // return $request->all();
        $email=Auth::user()->email;
        

       $feedbackData= $request->validate([
            'name'=>'required|max:50',
            
            'mobile'=>'required|min:10|max:12',
            'address'=>'required',
            'feedback'=>'required|max:999',
            
            ]);
            // return $feedbackData;
        $feed=new Feedback;
        $feed->name=$request['name'];
        $feed->email=$email;
        $feed->mobile=$request['mobile'];
        $feed->address=$request['address'];
        $feed->feedback=$request['feedback'];
        $feed->save();
        $request->session()->flash('status','Your valuable feedback has been submitted.');
        return \redirect('feedback');

    }
}
