<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Lodge;
use App\LodgeFacility;
use App\RoomCategory;
use App\RoomFacility;
use App\Room;
use Session;
use File;

class MasterDataController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
   

    public function addLodgeFacilitiesRedirect(Request $request){
        $role=Auth::user()->role;
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            return view('admin.masterData.lodge.addLodgeFacilities')->with(['lodge_id'=>$lodge->id]);
            
        }
        else{
            return \redirect('/home');
        }
        
    }
    public function addLodgeFacilities(Request $request){
        $role=Auth::user()->role;
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $request->validate([
                'facility'=>'required|max:100',
                'status'=>'required',
              
            ]);
            // return $request->all();
            // First we have to check whether the facility already added or not
            $facilityStatus=LodgeFacility::where('facility',$request->facility)->get();
     
            if(count($facilityStatus)){
                 Session::flash('checkStatus','Lodge Facility already added.');
                 return redirect('admin/masterData/lodge/addLodgeFacilities');
            }

         
            $lodgeFacility=new LodgeFacility();
            $lodgeFacility->facility=$request->facility;
            $lodgeFacility->status=$request->status;
            $lodgeFacility->lodge_id=$lodge->id;
            $lodgeFacility->save();
            Session::flash('status','Lodge Facility added successfully');
            return redirect('admin/masterData/lodge/addLodgeFacilities')->with(['message'=>'Lodge Facility added successfully'],200);
            
        }
        else{
            return \redirect('/home');
        }
        
    }

    public function removeLodgeFacilitiesRedirect(){
        $role=Auth::user()->role;
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
         
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $lodgeFacility=LodgeFacility::where('lodge_id',$lodge_id)->get();
            return view('admin.masterData.lodge.removeLodgeFacilities')->with(['lodgeFacility'=>$lodgeFacility]);
            
        }
        else{
            return \redirect('/home');
        }
        
    }
    public function removeLodgeFacilities(Request $request){
        $role=Auth::user()->role;
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $request->validate([
                'facility'=>'required',
                             
            ]);
            // return $request->all();
            // First we have to check whether the facility already added or not
            LodgeFacility::destroy($request->facility);
            Session::flash('status','Lodge Facility removed successfully');
            return redirect('admin/masterData/lodge/removeLodgeFacilities')->with(['message'=>'Lodge Facility added successfully'],200);
            
        }
        else{
            return \redirect('/home');
        }
        
    }

    public function changeLodgeFacilitiesRedirect(){
        $role=Auth::user()->role;
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $lodgeFacility=LodgeFacility::where('lodge_id',$lodge_id)->get();
            return view('admin.masterData.lodge.changeLodgeFacilities')->with(['lodgeFacility'=>$lodgeFacility]);
            
        }
        else{
            return \redirect('/home');
        }
        
    }

    public function changeLodgeFacilities(Request $request){
        $role=Auth::user()->role;
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $request->validate([
                'facility'=>'required',
                'status'=>'required'
                             
            ]);
            // return $request->all();
            // First we have to check whether the facility already added or not
            LodgeFacility::find($request->facility)->update(['status'=>$request->status]);
            Session::flash('status','Lodge Facility status changed successfully');
            return redirect('admin/masterData/lodge/changeLodgeFacilities')->with(['message'=>'Lodge Facility added successfully'],200);
            
        }
        else{
            return \redirect('/home');
        }
        
    }

    // Now from here we will start the Room category module
    public function addRoomCategoriesRedirect(){
        $role=Auth::user()->role;
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
         
            return view('admin.masterData.roomCategory.addRoomCategories')->with(['lodge_id'=>$lodge_id]);
            
        }
        else{
            return \redirect('/home');
        }
        
    }
    public function addRoomCategories(Request $request){
        $role=Auth::user()->role;
    
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            // return $request->room_type_image;
           
            $request->validate([
                'room_type'=>'required|max:70',
                'status'=>'required',
                'price'=>'required',
                
                'room_type_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);


            $checkStatus=RoomCategory::where('room_type',$request->room_type)->get();
            if(count($checkStatus)){
                Session::flash('checkStatus','Room Category has already been added, please try to add other room categories.');
                return redirect('admin/masterData/roomCategory/addRoomCategories')->with(['message'=>'Room Category has already been added '],200);

            }

            $roomCategory=new RoomCategory();
            
          
            if ($request->hasFile('room_type_image')) {
                $image = $request->file('room_type_image');
                $extension =$image->getClientOriginalExtension();
                $roomCategoryImage=time() . '.' .$extension;
                $destinationPath = public_path('/admin/RoomCategory_images/');
                $image->move($destinationPath, $roomCategoryImage);
                $roomCategory->image=$roomCategoryImage;
        
                
            }
            $roomCategory->room_type=$request->room_type;
            $roomCategory->status=$request->status;
            $roomCategory->price=$request->price;
            $roomCategory->lodge_id=$lodge_id;
            $roomCategory->save();
            Session::flash('status','Room Category added successfully.');
            return redirect('admin/masterData/roomCategory/addRoomCategories')->with(['message'=>'Room Category added successfully'],200);
            
        }
        else{
            return \redirect('/home');
        }
        
    }

    public function updateRoomCategoriesRedirect(){
        $role=Auth::user()->role;
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $roomCategory=RoomCategory::where('lodge_id',$lodge_id)->get();
                     
            return view('admin.masterData.roomCategory.updateRoomCategories')->with(['roomCategory'=>$roomCategory]);
            
        }
        else{
            return \redirect('/home');
        }
        
    }


    public function updateRoomCategories(Request $request){
        $role=Auth::user()->role;
    
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            // return $request->room_type_image;
           
            $request->validate([
                'room_type'=>'required|max:70',
                'status'=>'required',
                'price'=>'required',
                
                'room_type_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);
          
            $roomCategory=RoomCategory::where('room_type',$request->room_type)->where('lodge_id',$lodge_id)->first();
            
          
            if ($request->hasFile('room_type_image')) {
                $image = $request->file('room_type_image');
                $extension =$image->getClientOriginalExtension();
                $roomCategoryImage=time() . '.' .$extension;
                $destinationPath = public_path('/admin/RoomCategory_images/');
                $image->move($destinationPath, $roomCategoryImage);
                $roomCategory->image=$roomCategoryImage;
        
                
            }
            $roomCategory->room_type=$request->room_type;
            $roomCategory->status=$request->status;
            $roomCategory->price=$request->price;
            $roomCategory->lodge_id=$lodge_id;
            $roomCategory->save();
            Session::flash('status','Room Category updated successfully.');
            return redirect('admin/masterData/roomCategory/updateRoomCategories')->with(['message'=>'Room Category updated successfully'],200);
            
        }
        else{
            return \redirect('/home');
        }
        
    }

    //Now here we will start here the Room facility module
    public function addRoomFacilitiesRedirect(){
        $role=Auth::user()->role;
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $roomCategory=RoomCategory::where('lodge_id',$lodge_id)->get();
                     
            return view('admin.masterData.roomFacility.addRoomFacilities')->with(['roomCategory'=>$roomCategory]);
            
        }
        else{
            return \redirect('/home');
        }
        
    }

    
    public function addRoomFacilities(Request $request){
        $role=Auth::user()->role;
    
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
           
            // return $request->all();
           
            $request->validate([
                'room_type'=>'required',
                'bathroom'=>'required',
                'toilet'=>'required',
                'single_bed'=>'required',
                'double_bed'=>'required',
                'tv'=>'required',
                'wifi'=>'required',
                'geyser'=>'required',
                'ac'=>'required',
            ]);
            
               $checkStatus=RoomCategory::where('room_type',$request->room_type)->get();
            if(count($checkStatus)){
            
                RoomFacility::where('room_type',$request->room_type)->where('lodge_id',$lodge_id)
                            ->update([
                                'bathroom'=>$request->bathroom,
                                'toilet'=>$request->toilet,
                                'single_bed'=>$request->single_bed,
                                'double_bed'=>$request->double_bed,
                                'no_of_bed'=>$request->single_bed+$request->double_bed,
                                'tv'=>$request->tv,
                                'wifi'=>$request->wifi,
                                'geyser'=>$request->geyser,
                                'ac'=>$request->ac,

                            ]);
                
                Session::flash('checkStatus','Room Facilities has been updated Successfully.');
                return redirect('admin/masterData/roomFacility/addRoomFacilities')->with(['message'=>'Room Facilities has already updated'],200);

            }

            $roomFacility=new RoomFacility();
        
            $roomFacility->room_type=$request->room_type;
            $roomFacility->bathroom=$request->bathroom;
            $roomFacility->toilet=$request->toilet;
            $roomFacility->single_bed=$request->single_bed;
            $roomFacility->double_bed=$request->double_bed;
            $roomFacility->no_of_bed=$request->single_bed+$request->double_bed;
            $roomFacility->tv=$request->tv;
            $roomFacility->wifi=$request->wifi;
            $roomFacility->geyser=$request->geyser;
            $roomFacility->ac=$request->ac;
            $roomFacility->lodge_id=$lodge_id;
            $roomFacility->save();
            Session::flash('status','Room Services added successfully.');
            return redirect('admin/masterData/roomFacility/addRoomFacilities')->with(['message'=>'Room Category updated successfully'],200);
            
        }
        else{
            return \redirect('/home');
        }
        
    }

    public function addRoomRedirect(){
        $role=Auth::user()->role;
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $roomCategory=RoomCategory::where('lodge_id',$lodge_id)->get();
                     
            return view('admin.masterData.room.addRoom')->with(['roomCategory'=>$roomCategory]);
            
        }
        else{
            return \redirect('/home');
        }
        
    }

    public function addRoom(Request $request){
        $role=Auth::user()->role;
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $request->validate([
                'room_type'=>'required',
                'room_no'=>'required',
                'room_img1'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:4096',
                'room_img2'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:4096',
                'room_img3'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:4096',
                'status'=>'required',

            ]);

            $checkStatus=Room::where('room_type',$request->room_type)->where('room_no',$request->room_no)->where('lodge_id',$lodge_id)->get();
            if(count($checkStatus)){
                Session::flash('checkStatus','Room has already been added, please try to add other room no.');
                return redirect('admin/masterData/room/addRoom')->with(['message'=>'Room Category has already been added '],200);

            }


            $room=new Room();
            $room->room_no=$request->room_no;
            $room->room_type=$request->room_type;
            if ($request->hasFile('room_img1')) {
                $image = $request->file('room_img1');
                $extension =$image->getClientOriginalExtension();
                $room_img1=time() . '.' .$extension;
                $destinationPath = public_path('/admin/room_images/');
                $image->move($destinationPath, $room_img1);
                $room->img1=$room_img1;
        
                
            }
            
            if ($request->hasFile('room_img2')) {
                $image = $request->file('room_img2');
                $extension =$image->getClientOriginalExtension();
                $room_img2=time() . '.' .$extension;
                $destinationPath = public_path('/admin/room_images/');
                $image->move($destinationPath, $room_img2);
                $room->img2=$room_img2;
        
                
            }
            
            if ($request->hasFile('room_img3')) {
                $image = $request->file('room_img3');
                $extension =$image->getClientOriginalExtension();
                $room_img3=time() . '.' .$extension;
                $destinationPath = public_path('/admin/room_images/');
                $image->move($destinationPath, $room_img3);
                $room->img3=$room_img3;
        
                
            }

            $room->room_status=$request->status;
            $room->lodge_id=$lodge_id;
            $room->save();
            Session::flash('status','Room  added successfully.');
            return redirect('admin/masterData/room/addRoom')->with(['message'=>'Room Category updated successfully'],200);

                     
            
            
        }
        else{
            return \redirect('/home');
        }
        
    }

    public function deleteRoomRedirect(){
        $role=Auth::user()->role;
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $roomCategory=RoomCategory::where('lodge_id',$lodge_id)->get();
            $room=Room::where('lodge_id',$lodge_id)->get();
                     
            return view('admin.masterData.room.deleteRoom')->with(['roomCategory'=>$roomCategory,'room'=>$room]);
            
        }
        else{
            return \redirect('/home');
        }
        
    }

    public function getRoom(Request $request){
        $role=Auth::user()->role;

        // return  json_encode($role);
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
          
            $room=Room::where('room_type',$request->room_type)->where('lodge_id',$lodge_id)->get();
            return json_encode(['room_no'=>$room->no]);
            
        }
        else{
            return \redirect('/home');
        }
        
    }
    public function deleteRoom(Request $request){
        $role=Auth::user()->role;

        // return  json_encode($role);
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;

            $checkStatus=Room::where('room_type',$request->room_type)->where('room_no',$request->room_no)->where('lodge_id',$lodge_id)->get();
            if(count($checkStatus)==0){
                Session::flash('checkStatus','No Room found along with this Room Category, Pls choose correct data');
                return redirect('admin/masterData/room/deleteRoom')->with(['message'=>'No Room found along with this category, Pls choose correct data '],200);

            }

            
            Room::where('room_no',$request->room_no)->where('room_type',$request->room_type)->where('lodge_id',$lodge_id)->delete();

          
            Session::flash('status','Room has been deleted successfully');
            return redirect('admin/masterData/room/deleteRoom')->with(['message'=>'Room has been deleted Successfully. '],200);


            
        }
        else{
            return \redirect('/home');
        }
        
    }

    public function updateRoomRedirect(){
        $role=Auth::user()->role;
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $roomCategory=RoomCategory::where('lodge_id',$lodge_id)->get();
            $room=Room::where('lodge_id',$lodge_id)->get();
                     
            return view('admin.masterData.room.updateRoom')->with(['roomCategory'=>$roomCategory,'room'=>$room]);
            
        }
        else{
            return \redirect('/home');
        }
        
    }
    public function updateRoom(Request $request){
        $role=Auth::user()->role;
      
        if($role=='superadmin'){
         
            
            return view('superadmin.home');
        }
        elseif($role=='admin')
        {
            $email=Auth::user()->email;
            $lodge=Lodge::where('username',$email)->first();
            $lodge_id=$lodge->id;
            $request->validate([
                'room_type'=>'required',
                'room_no'=>'required',
                'room_img1'=>'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:4096',
                'room_img2'=>'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:4096',
                'room_img3'=>'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:4096',
                'status'=>'required',

            ]);
            $room=Room::where('room_no',$request->room_no)->where('lodge_id',$lodge_id)->first();
            // return $room;
       
            if ($request->hasFile('room_img1')) {
                $destinationPath=public_path('/admin/room_images'.$room->img1);
                if(File::exists($destinationPath)){
                    File::delete($destinationPath);
                }
                $image = $request->file('room_img1');
                $extension =$image->getClientOriginalExtension();
                $room_img1=time() . '.' .$extension;
                $destinationPath = public_path('/admin/room_images/');
                $image->move($destinationPath, $room_img1);
                $room->img1=$room_img1;
                
            }
            if ($request->hasFile('room_img2')) {
                $destinationPath=public_path('/admin/room_images'.$room->img2);
                if(File::exists($destinationPath)){
                    File::delete($destinationPath);
                }
                $image = $request->file('room_img2');
                $extension =$image->getClientOriginalExtension();
                $room_img2=time() . '.' .$extension;
                $destinationPath = public_path('/admin/room_images/');
                $image->move($destinationPath, $room_img2);
                $room->img2=$room_img2;
                
            }
            if ($request->hasFile('room_img3')) {
                $destinationPath=public_path('/admin/room_images'.$room->img3);
                if(File::exists($destinationPath)){
                    File::delete($destinationPath);
                }
                $image = $request->file('room_img3');
                $extension =$image->getClientOriginalExtension();
                $room_img3=time() . '.' .$extension;
                $destinationPath = public_path('/admin/room_images/');
                $image->move($destinationPath, $room_img3);
                $room->img3=$room_img3;
                
            }


            $room->room_type=$request->room_type;
            $room->room_status=$request->status;
            $room->save();

            Session::flash('status','Room status has been updated Successfully.');
                     
            return redirect('admin/masterData/room/updateRoom')->with(['message'=>'Room has been updated Successfully']);
            
        }
        else{
            return \redirect('/home');
        }
        
    }

}
