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
        // return $request->all();
        // $room=Room::all();
        // return $room;
        //
        //Here we mention the query to find out all the available rooms
        $request->validate([
        
            'checkin'=>'required|date',
            'checkout'=>'required|date',
            'adult'=>'required|min:1|max:2',
            'children'=>'required|min:0|max:1'

        ]);
      
            $checkin=$request['checkin'];
            $checkout=$request['checkout'];
            $adult=$request['adult'];
            $children=$request['child'];
            $person=$adult+$children;
            
            // Validate checkin and checkout
            if($checkout<=$checkin){
                return response()->json(['message'=>'Checkout must be greater than Checkin','success'=>false]);
            }
            if($adult>2 || $children>1){
                return response()->json(['message'=>'Maximum two adult and one child allowed in a single room','success'=>false]);
            }
            
      
            $room=Room::where('room_status',1)
            ->join('room_facilities',function($join){
                $join->on('rooms.room_type','room_facilities.room_type');
                $join->on('rooms.lodge_id','room_facilities.lodge_id');
              
            })
            ->join('lodges','rooms.lodge_id','lodges.id')->where('lodges.status',1)
            ->join('room_categories',function($join){
                $join->on('rooms.room_type','room_categories.room_type')->where('room_categories.status',1);
                $join->on('rooms.lodge_id','room_categories.lodge_id');
            })
           
      
            ->select('rooms.*','room_facilities.*','room_categories.price','room_categories.image','lodges.lodge_name','lodges.address','lodges.description')
            ->orderBy('room_categories.price','asc')
            
        ->whereNotExists(
            function($query) use ($checkin,$checkout,$person){
                $query->select('room_no','room_type','lodge_id','checkin','checkout','payment_status')
                ->from('booking_rooms')
               
                ->whereColumn('booking_rooms.room_no','rooms.room_no')
                ->whereColumn('booking_rooms.room_type','rooms.room_type')
                ->whereColumn('booking_rooms.lodge_id','rooms.lodge_id')
                ->where('booking_rooms.payment_status','Approved')

                ->where(function($query) use ($checkin,$checkout,$person){
                    $query->orWhereBetween('booking_rooms.checkin',[$checkin,$checkout])
                          ->orWhereBetween('booking_rooms.checkout',[$checkin,$checkout])
                          ->orWhere(function($query) use ($checkin,$checkout,$person){
                            $query->where('booking_rooms.checkin','<', $checkin)
                            ->where('booking_rooms.checkout','>',$checkout);
                          });
                       
                });
               
            
           
               
                        
            })->get();
           
     
        // return $room;
        if(count($room)==0){
            // Room has been booked already by someone else
            
            return response()->json(['message'=>'No Room available for the given period, Kindly check on some other date','success'=>false]);


                }
            
            return response()->json(['room'=>$room,'success'=>true,'total'=>count($room)],200);

                



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
