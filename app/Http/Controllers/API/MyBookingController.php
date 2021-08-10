<?php

namespace App\Http\Controllers\API;

use App\BookingRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class MyBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          // first exract the username
          $email=Auth::user()->email;
          // return $username;
          // Now we extact all the Booking history which have been booked by this username
           $myBookings=BookingRoom::where('username',$email)->orderBy('id', 'DESC')->get();
          //  return $myBookings;
          if(count($myBookings)==0){
              return response()->json(['message'=>'Empty..! no booking found','success'=>false]);
          }
  
        //   return response(['user'=>auth()->user(),'access_token'=>$accessToken,'success'=>true]);
        
          return response()->json(['myBooking'=>$myBookings,'success'=>true,'total'=>count($myBookings)],200);
         
       



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
    public function show(BookingRoom $bookingRoom,$bookingID)
    {
        //Here we show the details for specific booking ID
        $email=Auth::User()->email;
        $bookingStatus=BookingRoom::where('order_id',$bookingID)->first();
        // if(count($bookingStatus)==0){

        //     return response()->json(['message'=>'Invalid Booking ID','success'=>false],200);
        // }
    if(is_null($bookingStatus)){
            return response()->json(['message'=>'Invalid Booking ID','success'=>false],200);
        }
        return \response()->json(['status'=>$bookingStatus,'success'=>true],200);
    }



  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookingRoom  $bookingRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $booking=BookingRoom::find($id);
        $booking->update(['payment_status'=>'Cancelled']);
        return $booking;
       
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
