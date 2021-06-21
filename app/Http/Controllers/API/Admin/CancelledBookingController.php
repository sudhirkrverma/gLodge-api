<?php

namespace App\Http\Controllers\API\Admin;

use App\BookingRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class CancelledBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admin=User::where('role','=','admin')->first();
        if(is_null($admin)){
            return response(['message'=>'Invalid Credential for Admin'],400);
        }
        $cancelledBooking=BookingRoom::where('payment_status','=','Cancelled')->get();
        if(empty($cancelledBooking[0])){
            return response(['message'=>'No record found'],200);
        }
        return response(['cancelledBooking'=>$cancelledBooking,'message'=>'Data Retreived Successfully','total'=>count($cancelledBooking)],200);
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
                    return response(['message'=>'Checkout date has been over can not cancel']);
                }

                //Now we have to sure that Status of Booking Request should be shown as Pending only then only we can approve it

                if($data['payment_status']=='Pending'){
                    //Here we approve the booking request and cancelled all the remaining request that are applied for same checkin checkout period for same room and same lodge
                    $data->payment_status='Cancelled';
                    $data->save();
                   return response(['message'=>'Request has been cancelled successfully'],200);



                    
                }
                else if($data['payment_status']=='Cancelled'){
                    return response(['message'=>'Booking Request has already been cancelled'],200);
                }
                else if($data['payment_status']=='Approved'){
                    return response(['message'=>'Booking Request has already been approved, can not be cancelled now'],200);
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
