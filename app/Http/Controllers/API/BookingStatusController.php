<?php

namespace App\Http\Controllers\API;

use App\BookingRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
class BookingStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $username=Auth::user()->email;

        $currentDate=Carbon::now()->toDateString();
        $myBookingStatus=BookingRoom::find($request->id);
        

        if ($currentDate>=$myBookingStatus->checkin){
           return response()->json(['message'=>'Sorry, Booking Request can be cancelled only 24 hours before checkin into the lodge.','success'=>false]);
        }

        if($myBookingStatus->payment_status=='Cancelled'){
            return response()->json(['message'=>'Booking Request has already been cancelled','success'=>false]);
        }

        BookingRoom::where('username',$username)->where('id',$request->id)->where('checkin','>',$currentDate)->update(['payment_status'=>'Cancelled']);
       
        //Now we just pass the data to view
        return response()->json(['message'=>'Booking Request cancelled successully','success'=>true],200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookingRoom  $bookingRoom
     * @return \Illuminate\Http\Response
     */
    public function show(BookingRoom $bookingRoom,$bookingID)
    {
        //
      
       
        $bookingStatus=BookingRoom::where('order_id',$bookingID)->get();
        // $bookingStatus=BookingRoom::where('username',$username)->get();
        if(empty($bookingStatus[0])){
            return response(['message'=>'Invalid Booking ID !No Record found'],404);
        }
        return response(['Booking Status'=>$bookingStatus,'message'=>'Data Retreived Successfully','total'=>count($bookingStatus)],200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookingRoom  $bookingRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookingRoom $bookingRoom)
    {
        //
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
