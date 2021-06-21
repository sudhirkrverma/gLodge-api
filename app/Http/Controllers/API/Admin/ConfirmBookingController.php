<?php

namespace App\Http\Controllers\API\Admin;

use App\BookingRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ConfirmBookingController extends Controller
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
            return response(['message'=>'Invalid Credential for Admin']);
        }
        $confirmBooking=BookingRoom::where('payment_status','=','Approved')->get();
        return response(['confirmBooking'=>$confirmBooking,'message'=>'Data Retreived Successfully','total'=>count($confirmBooking)],200);

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
