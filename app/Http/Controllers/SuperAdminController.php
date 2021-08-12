<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lodge;
use App\Room;
use App\BookingRoom;
use App\RoomCategory;
use App\Feedback;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;

use Auth;

class SuperAdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    // 
    public function index(){
        // Here we will display all the registered lodges/hotels
        $role=Auth::user()->role;
        if($role=='superadmin'){
            $lodgeData=Lodge::all();
            
            
            
            return view('superadmin.home')->with(['lodgeData'=>$lodgeData,'message'=>'Lodge Data retrieved successfully'],200);
        }
        elseif($role=='admin')
        {
            return \redirect('admin/home');
        }
        else{
            return \redirect('/home');
        }
    }

    // Here we define the function for onboarding on gLodge to all admin
    public function onboardingRedirect(){
        $role=Auth::user()->role;
        if($role=='superadmin'){
            return view('superadmin.onboarding');
        }
        elseif($role=='admin')
        {
            return \redirect('admin/home');
        }
        else{
            return \redirect('/home');
        }
        
        
    }
    public function changeStatus(Request $request,$id){
        // Here we will display all the registered lodges/hotels
        
        $role=Auth::user()->role;
        if($role=='superadmin'){
           $lodge=Lodge::find($id);
            // return $lodge;
            if($lodge['status'] ==1){
                Lodge::where('id',$id)->update(['status'=>'0']);
                
            }
            else{
                Lodge::where('id',$id)->update(['status'=>'1']);

               
            }
            return redirect('/superadmin/home');

        }
        elseif($role=='admin')
        {
            return \redirect('admin/home');
        }
        else{
            return \redirect('/home');
        }
    }
    public function viewDetail(Request $request,$id){
        // Here we will display all the registered lodges/hotels
        
        $role=Auth::user()->role;
        if($role=='superadmin'){
           $lodge=Lodge::find($id);
           $room=Room::where('lodge_id',$lodge['id'])->get();
           $no_of_room=count($room);
           $roomCategory=RoomCategory::where('lodge_id',$lodge['id'])->get();
     
           $no_of_room_category=count($roomCategory);
           $bookingData=BookingRoom::where('lodge_id',$lodge['id'])->where('payment_status','Approved')->get();
           $no_of_booking=count($bookingData);
         
           return view('superadmin.viewDetail')->with(['lodge'=>$lodge,'room'=>$room,'noOfRoom'=>$no_of_room,'noOfRoomCategory'=>$no_of_room_category,'noOfBooking'=>$no_of_booking,'message'=>'Data retrieved successfully'],200);
        

        }
        elseif($role=='admin')
        {
            return \redirect('admin/home');
        }
        else{
            return \redirect('/home');
        }
    }

    public function onboardingAdmin(Request $request){
        $role=Auth::user()->role;
        if($role=='superadmin'){
            // return $request->all();
            
           $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'mobile' => ['required', 'string', 'min:10','max:12'],
            'role' => ['required', 'string', 'max:10'],
        ]);
            $onboarding=new User();
            $onboarding->name=$data['name'];
            $onboarding->email=$data['email'];
            $onboarding->password=Hash::make($data['password']);
            $onboarding->mobile=$data['mobile'];
            $onboarding->role=$data['role'];
            $onboarding->save();
            Session::flash('onboardingStatus',$onboarding->role.' has been onboarded successfully.!');
            return \redirect('/superadmin/onboarding');
        }
        elseif($role=='admin')
        {
            return \redirect('admin/home');
        }
        else{
            return \redirect('/home');
        }

    }

    public function feedback(){
        $role=Auth::user()->role;
        if($role=='superadmin'){

            

            $feedback=Feedback::where('reply',NULL)->latest()->get();
          
            return view('superadmin.feedback')->with(['feedback'=>$feedback]);
        }
        elseif($role=='admin')
        {
            return \redirect('admin/home');
        }
        else{
            return \redirect('/home');
        }
        
        
    }
    public function feedbackReply(Request $request){
        $role=Auth::user()->role;
        if($role=='superadmin'){
            
            $request->validate([
                'reply'=>'required|max:2000'
            ]);
         

            Feedback::where('id',$request->id)->update(['reply'=>$request->reply]);
        
            Session::flash('status','Your have replied to user');
          
           return redirect('superadmin/feedback');

        }
        elseif($role=='admin')
        {
            return \redirect('admin/home');
        }
        else{
            return \redirect('/home');
        }
        
        
    }
    public function queries(){
        $role=Auth::user()->role;
        if($role=='superadmin'){
            
         
         

            $feedback=Feedback::where('reply','<>',NULL)->latest()->get();
            // return $feedback;
        
            Session::flash('queryStatus','These are all the queries');
          
           return view('superadmin/queries')->with(['feedback'=>$feedback],200);

        }
        elseif($role=='admin')
        {
            return \redirect('admin/home');
        }
        else{
            return \redirect('/home');
        }
        
        
    }
}
