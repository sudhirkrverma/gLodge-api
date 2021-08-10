<?php

namespace App\Http\Controllers\API;

use App\BookingRoom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lodge;
use Auth;
use DateTime;
use Carbon\Carbon;
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
   
        // return $request->all();
        // first take all the parameter from form
        $data= $request->validate([
            'name'=>'required',
            'username'=>'required|email',
            'age'=>'required|min:1|max:100',
            'gender'=>'required|in:Male,Female',
            'mobile'=>'required|min:10|max:12',
            'address'=>'required',
            'district'=>'required',
            'state'=>'required',
            'room_no'=>'required',
            'room_type'=>'required',
            'room_image'=>'required',
            'lodge_id'=>'required',
            'lodge_name'=>'required',
            'checkin'=>'required|date',
            'checkout'=>'required|date',
            'noOfRoom'=>'required|min:1|max:1',
            'adult'=>'required|min:1|max:2',
            'children'=>'required|min:0|max:1',
            'amount'=>'required'
         
           
        ]);
        $checkin=$data['checkin'];
        $checkout=$data['checkout'];
        $noOfGuest=$data['adult']+$data['children'];
        $name=$data['name'];
        $address=$data['address'].', '.$data['district'].', '.$data['state'];
        $checkinDay= Carbon::parse($checkin)->format('l');
        $checkoutDay= Carbon::parse($checkout)->format('l');
  
        // First we have to check whether some record exist or not OR Room has been booked or not by someone else
        // Just checkin the room status
        // So here we prepare a query to check the payment status of this entry
      $checkRoomStatus=BookingRoom::where('payment_status','Approved')
                                ->where('room_no',$data['room_no'])
                                ->where('room_type',$data['room_type'])
                                ->where('lodge_id',$data['lodge_id'])
                                ->where('lodge_name',$data['lodge_name'])
                                ->where(function($query) use ($checkin,$checkout){
                                   $query ->orWhereBetween('checkin',[$checkin,$checkout])
                                      ->orWhereBetween('checkout',[$checkin,$checkout])
                                      ->orWhere(function($query) use ($checkin,$checkout){
                                        $query->where('checkin','<', $checkin)
                                        ->where('checkout','>',$checkout);
                                    

                                });
                            })->get();
                               
                                
                      
                //   return $checkRoomStatus;

        if(count($checkRoomStatus)){
            // Room has been booked already by someone else
        return response()->json(['message'=>'Room has already been booked by someone else, Kindly modify your booking','success'=>false]);
        }
        else{
                  // Total Stay duration
            $checkin=strtotime($request->checkin);
            $checkout=strtotime($request->checkout);
            $interval=(int)(($checkout - $checkin)/86400);
            // Room is still available for we can proceed for Room Booking
            //  now we can prepare the query and insert it in database
            $order_id='PSG'.rand(1000000,9999999);
            //Here we extact some lodge data
            $lodge_data=Lodge::find($data['lodge_id']);
            $lodge_address=$lodge_data->address;
            $lodge_description=$lodge_data->description;

            $bookingData=new BookingRoom();
            
            $bookingData->order_id=$order_id;
            $bookingData->channel_id='WEB';
            $bookingData->room_no=$data['room_no'];
            $bookingData->room_type=$data['room_type'];
            $bookingData->image=$data['room_image'];
            $bookingData->checkin=$data['checkin'];
            $bookingData->checkout=$data['checkout'];
            $bookingData->amount=$data['amount']*$interval;
            $bookingData->mobile=$data['mobile'];
            $bookingData->lodge_name=$data['lodge_name'];
            $bookingData->lodge_id=$data['lodge_id'];
            $bookingData->lodge_address=$lodge_address;
            $bookingData->booked_by=$name;
            $bookingData->username=$data['username'];
            $bookingData->age=$data['age'];
            $bookingData->gender=$data['gender'];
            $bookingData->address=$address;
            $bookingData->no_of_guest=$noOfGuest;
            $bookingData->payment_status='Approved';
            $bookingData->save();
            
         
            // $lodge_data=Lodge::find($data['lodge_id']);
            // $lodge_address=$lodge_data->address;
            // $lodge_description=$lodge_data->description;
            $bookingData=BookingRoom::select('*')->where('order_id',$order_id)->first();
           
            $bookingStatus=$bookingData->payment_status;
            return response()->json(['bookingData'=>$bookingData,'success'=>true],200);
                        
           
        

        }
        
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
       return $requst->all();
        
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
