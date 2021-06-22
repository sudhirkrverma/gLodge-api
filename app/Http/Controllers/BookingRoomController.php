<?php

namespace App\Http\Controllers;

use Auth;
use App\BookingRoom;
use Illuminate\Http\Request;
use DateTime;
use Carbon\Carbon;
use Session;
use App\Lodge;


class BookingRoomController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function directBooking(){
        return 'Page not found';
    }
    public function indirectBooking(){
        return 'Page not found';
    }
    public function bookingConfirm(){
        return 'Page not found';
    }

    public function directBookingRequest(Request $request){
        // return $request->all();
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
            $total=$data['adult']+$data['children'];
            $total=$request->adult+$request->children;
            $checkin=strtotime($request->checkin);
            $checkout=strtotime($request->checkout);
            $interval=(int)(($checkout - $checkin)/86400);
            $checkinDay= Carbon::parse($checkin)->format('l');
            $checkoutDay= Carbon::parse($checkout)->format('l');

    
        return view('directBooking')->with(['room'=>$room,'data'=>$data,'message'=>'Users and Room Details found','total'=>$total,'interval'=>$interval,'checkinDay'=>$checkinDay,'checkoutDay'=>$checkoutDay],200);
    }
    public function indirectBookingRequest(Request $request){

        // return $request->all();
        
        $data=$request->validate([
            'room_no'=>'required|integer',
            'room_type'=>'required',
            'room_image'=>'required',
            'lodge_id'=>'required|integer|min:1',
            'lodge_name'=>'required',
            'price'=>'required|integer',
            'checkin'=>'required|date|after_or_equal:'. date('Y-m-d'),
            'checkout'=>'required|date|after:checkin',
            'noOfRoom'=>'required|min:1|max:1',
            'adult'=>'required|min:1|max:2',
            'children'=>'required|min:0|max:1'
            
            ]);
            $total=$request->adult+$request->children;
            $checkin=strtotime($request->checkin);
            $checkout=strtotime($request->checkout);
            $interval=(int)(($checkout - $checkin)/86400);
            // echo $interval;
           
            $checkinDay= Carbon::parse($checkin)->format('l');
            $checkoutDay= Carbon::parse($checkout)->format('l');

            return view('indirectBooking')->with(['data'=>$data,'message'=>'Users and Room Details','total'=>$total,'interval'=>$interval,'checkinDay'=>$checkinDay,'checkoutDay'=>$checkoutDay],200);
           

    }

    public function bookingConfirmation(Request $request)
    {
       $username = Auth::user()->email;
        
        // first take all the parameter from form
        $data= $request->validate([
            'fname'=>'required|max:20',
            'lname'=>'required|max:20',
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
        $name=$data['fname'].' '.$data['lname'];
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
            Session::flash('notAvailable','Room has already been booked by you or someone else, Kindly search again for another room.');


            return redirect('roomSearch');
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
            $bookingData->username=$username;
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
            
                        
            return view('bookingConfirmationStatus')->with(['data'=>$data,'message'=>'Your Room has been booked successfully','checkinDay'=>$checkinDay,'checkoutDay'=>$checkoutDay,'lodge_address'=>$lodge_address,'lodge_desc'=>$lodge_description,'bookingID'=>$order_id,'bookingStatus'=>$bookingStatus,'address'=>$address],200);

        

        }
        
        // return $data;
        // return view('bookingConfirmationStatus')->with(['data'=>$data,'message'=>'Users and Room Details'],200);
       
       
    }


    // Here qw define the function to extact the booking history of user
    public function myBookings(Request $request)
    {
        // first exract the username
        $username=Auth::user()->email;
        // return $username;
        // Now we extact all the Booking history which have been booked by this username
         $myBookings=BookingRoom::where('username',$username)->orderBy('id', 'DESC')->get();
        //  return $myBookings;
        if(count($myBookings)==0){
            Session::flash('checkStatus','Sorry, You did not have any booking till now.');
            return view('myBookings')->with(['myBookings'=>$myBookings,'message'=>'These are all your bookings data'],200);
        }

        Session::flash('bookingStatus','These are all your bookings data');
        //Now we just pass the data to view
        return view('myBookings')->with(['myBookings'=>$myBookings,'message'=>'These are all your bookings data'],200);
    }
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // echo 'Here we will show the form and then submit the details in the database';
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookingRoom  $bookingRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingRoom $bookingRoom)
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
