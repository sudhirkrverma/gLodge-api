<?php

namespace App\Http\Controllers;

use App\Room;
use App\RoomFacility;
use App\BookingRoom;
use App\LodgeFacility;
use Illuminate\Http\Request;
use Session;

class RoomController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $lodgeFacility=LodgeFacility::inRandomOrder()->where('status',1)->limit(14)->get();
      
        return view('roomSearch')->with(['lodgeFacility'=>$lodgeFacility]);
    } 

    public function roomAvailable(){
        return 'Page not found';
    }

    public function vacantRoom(Request $request)
    {
        //Now first we will validate all the parameter
      
        $data=$request->validate([
        
            'checkin'=>'required|date|after_or_equal:'. date('Y-m-d'),
            'checkout'=>'required|date|after:checkin',
            'noOfRoom'=>'required|min:1|max:1',
            'adult'=>'required|min:1|max:2',
            'children'=>'required|min:0|max:1'

        ]);
            $checkin=$request['checkin'];
            $checkout=$request['checkout'];
            $person=1;

        // $query="select * from rooms where NOT EXISTS (select room_no,room_type from booking_room where (rooms.room_no= booking_room.room_no AND rooms.room_type=booking_room.room_type AND rooms.hotel_id=booking_room.hotel_id) AND (checkin>='$checkin' AND checkout<='$checkout'  AND payment_status='Approved')) AND  hotel_id='$hotelid' AND room_status='1'";

        //Here we first find out all the available rooms using the above parameter
        // $room=array();
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
                    Session::flash('warning','No Room avaiable for the given peroid, Kindly check on some other date.');
        
        
                    return redirect('roomSearch');

        // if(is_null($room)){
        //     return response(['message'=>'Room Not Found!'],404);
        }
        else{

       
        $total=count($room);

      
        return  view('roomAvailable')->with(['rooms'=>$room,'data'=>$data,'message'=>'List of avaiable room','total'=>$total],200);
        // return view('test');
        }
        
       
     

       
    
     }

     public function viewDetailRoom(){
         return 'Page Not found';
     }

     public function viewDetail(Request $request)
     {  
        //  return $request->all();
        $data=$request->validate([
            'checkin'=>'required|date|after_or_equal:'. date('Y-m-d'),
            'checkout'=>'required|date|after:checkin',
            'noOfRoom'=>'required|min:1|max:1',
            'adult'=>'required|min:1|max:2',
            'children'=>'required|min:0|max:1'

        ]);
      
            // return $request->all();
            $room=json_decode($request->room);
            // $room=$request->room;
           
        
        return view('viewDetail')->with(['room'=>$room,'data'=>$data,'message'=>'Users and Room Details found','total'=>3],200);
         
     }
    
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
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
