<?php

namespace App\Http\Controllers\API\Admin;

use App\BookingRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class PendingRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //Here we find out the pending Request
        // $username=$request->username;
        // return $username;
        $admin=User::where('role','=','admin')->first();
        if(is_null($admin)){
            return response(['message'=>'Invalid Credential for Admin'],400);
        }
        $pendingBooking=BookingRoom::where('payment_status','=','Pending')->get();
        if(empty($pendingBooking[0])){
            return response(['message'=>'No record found'],200);
        }
        return response(['pendingBooking'=>$pendingBooking,'message'=>'Data Retreived Successfully','total'=>count($pendingBooking)],200);

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookingRoom  $bookingRoom
     * @return \Illuminate\Http\Response
     */
    public function show(BookingRoom $bookingRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookingRoom  $bookingRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookingRoom $bookingRoom,$id)
    {
        
        //Now first we have to sure whether it is admin login or not
        $admin=User::where('role','=','admin')->first();
        if(is_null($admin)){
            return response(['message'=>'Invalid Credential for Admin'],400);
        }  
        //Then we will check whether the checkout has been expired or not
                $currentDate=date('Y-m-d');
                $data=BookingRoom::find($id);
                if(is_null($data)){
                    return \response(['message'=>'No record found'],404);
                }
                if($currentDate >  $data['checkout']){
                    // return response(['checkout'=>$data['checkout'],'currentDate'=>$currentDate]);
                    return response(['message'=>'Checkout date has been over can not approved']);
                }

                //Now we have to sure that Status of Booking Request should be shown as Pending only then only we can approve it

                if($data['payment_status']=='Pending'){
                    //Here we approve the booking request and cancelled all the remaining request that are applied for same checkin checkout period for same room and same lodge
                    $data->payment_status='Approved';
                    $data->approved_by='Admin';
                    $data->save();//It has approved 
                    
                    //But we have to cancel duplicate request using-same (room_no ,room_type, lodge_id,checkin, checkout)
                    $cancelRequest=BookingRoom::where('id','<>',$data['id'])
                                                ->where('room_no','=',$data['room_no'])
                                                ->where('room_type','=',$data['room_type'])
                                                ->where('lodge_id','=',$data['lodge_id'])
                                                ->whereBetween('checkout',[$data['checkin'],$data['checkout']])
                                                ->orWhereBetween('checkin',[$data['checkin'],$data['checkout']])
                                                ->where('payment_status','=','Pending')
                                                ->update(['payment_status'=>'Cancelled']);
              
                   
                  

                   return response(['message'=>'Room Booking request has been approved successfully'],200);



                    
                }
                else if($data['payment_status']=='Approved'){
                    return response(['message'=>'Booking Request has already been approved'],200);
                }
                else if($data['payment_status']=='Cancelled'){
                    return response(['message'=>'Booking Request has already been cancelled'],200);
                }
                else{
                    return response(['message'=>'error'],400);
                }



      
     
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookingRoom  $bookingRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingRoom $bookingRoom)
    {
        //
    }
}
