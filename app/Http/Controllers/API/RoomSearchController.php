<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Room;
use App\RoomCategory;
use App\RoomFacility;
use Illuminate\Http\Request;

class RoomSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //Here we mention the query to find out all the available rooms
        // $query="select * from rooms where NOT EXISTS (select room_no,room_type from booking_room where (rooms.room_no= booking_room.room_no AND rooms.room_type=booking_room.room_type AND rooms.hotel_id=booking_room.hotel_id) AND (checkin>='$checkin' AND checkout<='$checkout'  AND payment_status='Approved')) AND  hotel_id='$hotelid' AND room_status='1'";
     $data=$request->only('checkin','checkout');
    //    return $data['checkin'];
        $checkin=$data['checkin'];
        $checkout=$data['checkout'];
        $person=1;
        
        

        $room=Room::where('room_status','=',1)
     
                ->whereNotExists(
                    function($query) use ($checkin,$checkout,$person){
                        $query->select('room_no','room_type','lodge_id')
                        ->from('booking_rooms')

                        ->Where('booking_rooms.room_no','=','rooms.room_no')
                        ->Where('booking_rooms.room_type','=','rooms.room_type')
                        ->Where('booking_rooms.lodge_id','=','rooms.lodge_id')
                        ->where('booking_rooms.payment_status','=','Approved')
                        ->where('booking_rooms.checkin','>=',$checkin)
                        ->where('booking_rooms.checkout','<=',$checkout);
                   
                       
                                
                    })->get();
              

       $len=count($room);
       if(empty($room[0])){
        return response(['message'=>'No record found'],200);
    }
    //    $room_type=array();
       $room_type_facility=array();
       $rooms=array();
       for ($i=0;$i<$len;$i++){
        //   $room_type[$i]=$room[$i]['room_type'];
          $room_type_facility[$i]=RoomFacility::select('toilet','single_bed','double_bed','no_of_bed','tv','wifi','geyser','ac')->where('room_type','=',$room[$i]['room_type'])->first();
          $rooms[$i]=array_merge($room[$i]->toArray(),$room_type_facility[$i]->toArray());
         
       }
    

        if(is_null($rooms)){
            return reponse(['message'=>'Room Not Found!'],404);
        }

        return response(['rooms'=>$rooms,'message'=>'Room Available Retreived Successfully','total'=>count($rooms)],200);
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
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
