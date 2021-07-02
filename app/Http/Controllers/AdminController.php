<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Lodge;
use App\Feedback;
use App\LodgeFacility;
use App\Room;
use App\RoomFacility;
use App\BookingRoom;
use App\RoomCategory;
use File;
use Session;
use DataTables;
use Carbon\Carbon;



class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $role=Auth::user()->role;
        if($role=='superadmin'){
            return redirect('/superadmin/home');

        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
           
            // return $lodge;
            if(empty($lodge)){
                // return count($lodge);
              
            Session::flash('checkStatus','You are not onboarded yet, kindly update the Profile and Master Data');
            return redirect('/admin/defaultPage');


            }
            
            $room=Room::where('lodge_id',$lodge->id)->get();
            $no_of_room=count($room);
            $roomCategory=RoomCategory::where('lodge_id',$lodge->id)->get();
         
               $no_of_room_category=count($roomCategory);
               $bookingData=BookingRoom::where('lodge_id',$lodge->id)->where('payment_status','Approved')->get();
               $no_of_booking=count($bookingData);
               
            return view('admin.home')->with(['lodge'=>$lodge,'noOfRoom'=>$no_of_room,'noOfBooking'=>$no_of_booking,'noOfRoomCategory'=>$no_of_room_category]);
        }
        else{
            return \redirect('/home');
        }

        // $email=Auth::user()->email;
        // $lodge=Lodge::where('username',$email)->first();
        
        // $room=Room::where('lodge_id',$lodge->id)->get();
        // $no_of_room=count($room);
        // $roomCategory=RoomCategory::where('lodge_id',$lodge->id)->get();
     
        //    $no_of_room_category=count($roomCategory);
        //    $bookingData=BookingRoom::where('lodge_id',$lodge->id)->where('payment_status','Approved')->get();
        //    $no_of_booking=count($bookingData);
        // return view('admin.home')->with(['lodge'=>$lodge,'noOfRoom'=>$no_of_room,'noOfBooking'=>$no_of_booking,'noOfRoomCategory'=>$no_of_room_category]);
    }


    public function changeStatus(Request $request,$id){
        // Here we will display all the registered lodges/hotels
        
        $role=Auth::user()->role;
        if($role=='superadmin'){
            return redirect('/superadmin/home');

        }
        elseif($role=='admin')
        {
            $lodge=Lodge::find($id);
            // return $lodge;
            if($lodge['status'] ==1){
                Lodge::where('id',$id)->update(['status'=>'0']);
               
            }
            else{
                Lodge::where('id',$id)->update(['status'=>'1']);

              
            }
            return \redirect('admin/home');
        }
        else{
            return \redirect('/home');
        }
    }

    public function updateProfileRedirect(){
        $role=Auth::user()->role;
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            return view('admin.updateProfile')->with(['username'=>Auth::user()->email]);
        }
        else{
            return \redirect('/home');
        }
     
    }
    //Here we will define booking history function to get all the user who book the room
    public function bookingHistory(Request $request){
        $role=Auth::user()->role;
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            if(empty($lodge)){
                // return count($lodge);
              
            Session::flash('checkStatus','You are not onboarded yet, kindly update the Profile and Master Data');
            return redirect('/admin/defaultPage');


            }

            $lodge_id=$lodge->id;
            $bookingData=BookingRoom::where('lodge_id',$lodge->id)->latest()->get();
            
            
//             if($request->ajax()){
           
            
//                 $bookingData=BookingRoom::where('lodge_id',$lodge->id)->get();
//                 return DataTables::of($bookingData)
//                 ->addIndexColumn()
//                 ->addColumn('action',function($row){
//                     $action = '<a class="btn btn-info" id="show-user" data-toggle="modal" data-id='.$row->id.'>Show</a>
// <a class="btn btn-success" id="edit-user" data-toggle="modal" data-id='.$row->id.'>Edit </a>
// <meta name="csrf-token" content="{{ csrf_token() }}">
// <a id="delete-user" data-id='.$row->id.' class="btn btn-danger delete-user">Delete</a>';
//                     return $action;
//                 })
//                 ->rawColumns(['action'])
//                 ->make(true);
//             }
//             return view('admin.bookingHistory');
            // return $bookingData;
            return view('admin.bookingHistory')->with(['bookingData'=>$bookingData]);
        }
        else{
            return \redirect('/home');
        }
        
    }

// Here we will define the master data redirect function
public function masterData(){
    $role=Auth::user()->role;
    if($role=='superadmin'){
     
        
        return view('superadmin.home');
    }
    elseif($role=='admin')
    {
        $email=Auth::user()->email;
        $lodge=Lodge::where('username',$email)->first();
        if(empty($lodge)){
            // return count($lodge);
          
        Session::flash('checkStatus','You are not onboarded yet, kindly Update Profile then only you can add Master Data');
        return redirect('/admin/defaultPage');


        }
        $lodgeFacility=LodgeFacility::where('lodge_id',$lodge->id)->get();
        // $roomCategory=RoomCategory::where('lodge_id',$lodge->id)->get();
        $roomCategory=RoomCategory::where('room_categories.lodge_id',$lodge->id)
                     ->join('room_facilities',function($join){
                         $join->on('room_categories.lodge_id','room_facilities.lodge_id');
                         $join->on('room_categories.room_type','room_facilities.room_type');

                     })->get();
                    //  return $roomCategory;
        $roomFacility=RoomFacility::where('lodge_id',$lodge->id)->get();
        $room=Room::where('lodge_id',$lodge->id)->get();
        $bookingData=BookingRoom::where('lodge_id',$lodge->id)->where('payment_status','Approved')->get();
      
        return view('admin.masterData')->with(['lodgeFacility'=>$lodgeFacility,'roomCategory'=>$roomCategory,'roomFacility'=>$roomFacility,'room'=>$room,'booking'=>$bookingData]);
    }
    else{
        return \redirect('/home');
    }
    
}
public function cancelBooking(Request $request,$id){
    $role=Auth::user()->role;
   
    if($role=='superadmin'){
     
        
        return view('superadmin.home');
    }
    elseif($role=='admin')
    {
        $email=Auth::user()->email;
        $lodge=Lodge::where('username',$email)->first();
        $lodge_id=$lodge->id;
        $dt = Carbon::now()->toDateString();
        // return $dt;
        $data=BookingRoom::where('id',$id)->where('checkin','>',$dt)->update(['payment_status'=>'Cancelled']);
        
    //    return $data;
        
        
        $bookingData=BookingRoom::where('lodge_id',$lodge->id)->latest()->get();
        
        if($data==0){
         
            Session::flash('checkStatus','You can not cancel the request once checkin date has been over.');
        }
        
        return redirect('admin/bookingHistory')->with(['bookingData'=>$bookingData]);
    }
    else{
        return \redirect('/home');
    }
    
}




    public function updateProfile(Request $request){
        //First we have to validate the data
        // $this->validate($request, [
        //     'file' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:4096',
        //   ]);
        $request->validate([
            'lodge_name'=>'required|max:100',
            'owner_name'=>'required|max:100',
            'owner_contact'=>'required|min:10|max:12',
            'receptionist_contact'=>'required|min:10|max:12',
            'lodge_desc'=>'required|max:50',
            'lodge_img'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:4096',
            'lodge_img1'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:4096',
            'lodge_img2'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:4096',
            'lodge_img3'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:4096',
            'lodge_address'=>'required|max:80',
            'lodge_status'=>'required'
        ]);
        $role=Auth::user()->role;
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        //This is our part to do something
        elseif($role=='admin')
        {
            $email=$request->email;
            // return $request->all();
           
            $lodge=Lodge::where('username',$email)->get();
            // If the lodge data already exist then we just simply have to update
            if(count($lodge)){
           

                $lodge=Lodge::where('username',$email)->first();
                // return $lodge;
           
                if ($request->hasFile('lodge_img')) {
                    $destinationPath=public_path('/admin/lodge_images'.$lodge->lodge_img);
                    if(File::exists($destinationPath)){
                        File::delete($destinationPath);
                    }
                    $image = $request->file('lodge_img');
                    $extension =$image->getClientOriginalExtension();
                    $lodge_img=time() . '.' .$extension;
                    $destinationPath = public_path('/admin/lodge_images/');
                    $image->move($destinationPath, $lodge_img);
                    $lodge->lodge_img=$lodge_img;
                    
                }
                if ($request->hasFile('lodge_img1')) {
                    $destinationPath=public_path('/admin/lodge_images'.$lodge->lodge_img1);
                    if(File::exists($destinationPath)){
                        File::delete($destinationPath);
                    }
                    $image = $request->file('lodge_img1');
                    $extension =$image->getClientOriginalExtension();
                    $lodge_img1=time() . '.' .$extension;
                    $destinationPath = public_path('/admin/lodge_images/');
                    $image->move($destinationPath, $lodge_img1);
                    $lodge->lodge_img1=$lodge_img1;
                    
                }
                if ($request->hasFile('lodge_img2')) {
                    $destinationPath=public_path('/admin/lodge_images'.$lodge->lodge_img2);
                    if(File::exists($destinationPath)){
                        File::delete($destinationPath);
                    }
                    $image = $request->file('lodge_img2');
                    $extension =$image->getClientOriginalExtension();
                    $lodge_img2=time() . '.' .$extension;
                    $destinationPath = public_path('/admin/lodge_images/');
                    $image->move($destinationPath, $lodge_img2);
                    $lodge->lodge_img2=$lodge_img2;
                    
                }
                if ($request->hasFile('lodge_img3')) {
                    $destinationPath=public_path('/admin/lodge_images'.$lodge->lodge_img3);
                    if(File::exists($destinationPath)){
                        File::delete($destinationPath);
                    }
                    $image = $request->file('lodge_img3');
                    $extension =$image->getClientOriginalExtension();
                    $lodge_img3=time() . '.' .$extension;
                    $destinationPath = public_path('/admin/lodge_images/');
                    $image->move($destinationPath, $lodge_img3);
                    $lodge->lodge_img3=$lodge_img3;
                    
                }

                $lodge->lodge_name=$request->lodge_name;
                $lodge->owner_name=$request->owner_name;
                $lodge->owner_contact=$request->owner_contact;
                $lodge->receptionist_contact=$request->receptionist_contact;
                $lodge->description=$request->lodge_desc;
                $lodge->username=$request->email;
                $lodge->status=$request->lodge_status;
                $lodge->address=$request->lodge_address;
                $lodge->save();

               return redirect('/admin/home');
                            

            }
            // Otherwise we have to create a new record
            else{
                $lodge=new Lodge();
           
                if ($request->hasFile('lodge_img')) {
                    $image = $request->file('lodge_img');
                    $extension =$image->getClientOriginalExtension();
                    $lodge_img=time() . '.' .$extension;
                    $destinationPath = public_path('/admin/lodge_images/');
                    $image->move($destinationPath, $lodge_img);
                    $lodge->lodge_img=$lodge_img;
            
                    
                }
                
                if ($request->hasFile('lodge_img1')) {
                    $image = $request->file('lodge_img1');
                    $extension =$image->getClientOriginalExtension();
                    $lodge_img1=time() . '.' .$extension;
                    $destinationPath = public_path('/admin/lodge_images/');
                    $image->move($destinationPath, $lodge_img1);
                    $lodge->lodge_img1=$lodge_img1;
            
                    
                }
                
                if ($request->hasFile('lodge_img2')) {
                    $image = $request->file('lodge_img2');
                    $extension =$image->getClientOriginalExtension();
                    $lodge_img2=time() . '.' .$extension;
                    $destinationPath = public_path('/admin/lodge_images/');
                    $image->move($destinationPath, $lodge_img2);
                    $lodge->lodge_img2=$lodge_img2;
            
                    
                }
                
                if ($request->hasFile('lodge_img3')) {
                    $image = $request->file('lodge_img3');
                    $extension =$image->getClientOriginalExtension();
                    $lodge_img3=time() . '.' .$extension;
                    $destinationPath = public_path('/admin/lodge_images/');
                    $image->move($destinationPath, $lodge_img3);
                    $lodge->lodge_img3=$lodge_img3;
            
                    
                }
                $lodge->lodge_name=$request->lodge_name;
                $lodge->owner_name=$request->owner_name;
                $lodge->owner_contact=$request->owner_contact;
                $lodge->receptionist_contact=$request->receptionist_contact;
                $lodge->description=$request->lodge_desc;
                $lodge->username=$request->email;
                $lodge->status=$request->lodge_status;
                $lodge->address=$request->lodge_address;
                $lodge->save();
               return redirect('/admin/home');


                // return redirect('updateProfile')->with('lodge',$lodge);

                

            }
            
            return redirect('/admin/home');

        }


        else{
            return \redirect('/home');
        }
     
    }

    public function feedback(){
        $role=Auth::user()->role;
       
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $adminFeedback=Feedback::where('email',$email)->latest()->get();
            return view('admin.feedback')->with(['adminFeedback'=>$adminFeedback],200);
        }
        else{
            return \redirect('/home');
        }
        
    }
    
    public function submitFeedback(Request $request){
        $role=Auth::user()->role;
       
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
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
             return \redirect('admin/feedback');
           
        }
        else{
            return \redirect('/home');
        }
        
    }
    public function defaultPage(){
        $role=Auth::user()->role;
       
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
        
           return view('admin.defaultPage');
        }
        else{
            return \redirect('/home');
        }
        
    }
    
}
