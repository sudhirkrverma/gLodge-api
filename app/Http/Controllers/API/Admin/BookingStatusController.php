<?php

namespace App\Http\Controllers\API\Admin;

use App\BookingRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

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
        $admin=User::where('role','=','admin')->first();
        if(is_null($admin)){
            return response(['message'=>'Invalid Credential for Admin'],400);
        }
        $bookingStatus=BookingRoom::where('order_id','=',$bookingID)->get();

        if(empty($bookingStatus[0])){
            return response(['message'=>'No record found'],404);
        }

        return response(['bookingStatus'=>$bookingStatus,'message'=>'Data Retreived Successfully','total'=>count($bookingStatus)],200);
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
