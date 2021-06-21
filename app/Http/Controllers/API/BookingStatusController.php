<?php

namespace App\Http\Controllers\API;

use App\BookingRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
