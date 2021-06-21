<?php

namespace App\Http\Controllers\API;

use App\BookingRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lodge;
// use Illuminate\Support\Facades\Validator;


class BookingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $bookingRoomData=BookingRoom::all();
        if(empty($bookingRoomData[0])){
            return response(['message'=>'No record found'],404);
        }

        return response(['Booking Data'=>$bookingRoomData,'message'=>'Data Retreived Successfully','total'=>count($bookingRoomData)],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //here we extract the lodge name 
        $LodgeData=Lodge::find($request->lodge_id);
        
        // echo  $request->lodge_name=$LodgeData['lodge_name'];

        // first we have to validate all the parameter
                $request->validate([
            'username'=>'required|email',
            'age'=>'required|integer|min:1|max:100',
            'gender'=>'required|in:male,female',
            'mobile'=>'required|max:12',
            'address'=>'required|max:50',
            'checkin'=>'required|date',
            'checkout'=>'required|date',
            'room_no'=>'required|integer',
            'room_type'=>'required',
            'order_id'=>'required',
            'lodge_id'=>'required',
            'channel_id'=>'required',
            'booked_by'=>'required',
            'payment_status'=>'required'

        ]);

        $data=$request->all();
        $data['lodge_name']=$LodgeData['lodge_name'];
        // return $data;
        $result=BookingRoom::create($data);
        if(is_null($result)){
            return response(['message'=>'Something wrong happened'],422); //Upprocessable entity
        }
        return response(['Booking Data'=>$result],200);
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
        return response(['message'=>BookingRoom::find($id)]);
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
