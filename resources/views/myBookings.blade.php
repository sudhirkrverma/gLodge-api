@extends('layouts.app')

@section('content')
<div class="container">

   


  @if(Session::has('bookingStatus'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Boooking Data!</strong> {{Session::get('bookingStatus')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    @endif
    @if(Session::has('checkStatus'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> {{Session::get('checkStatus')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    @endif
    @if(Session::has('cancelStatus'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> {{Session::get('cancelStatus')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    @endif
    @if(Session::has('cancelSuccess'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> {{Session::get('cancelSuccess')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    @endif

@foreach($myBookings as $booking)



<div class="card m-4">
  <div class="card-header">
    <h5 class="font-weight-bold">{{$booking['room_no']}}- {{$booking['room_type']}} <span
      class="text-primary ml-4"> {{$booking['lodge_name']}}</span> 
      <span class="font-weight-bold" style="font-size: 16px; float:right;">Booking ID: <span class="text-success">{{$booking['order_id']}}</span> </span>
  </h5>
  <h6 class="text-secondary font-weight-bold ">{{$booking['lodge_address']}}</h6>

  </div>
       
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5"><img src="{{ asset('admin/room_images/') }}/{{$booking['image']}}" style="width: 100%; height: 95%;" alt="Image"/> </div>
                <div class="col-sm-5">
                    <h5 class="text-success"><u><em>Your booking information </em></u>:-</h5>
                    <ul>
                        <li>Name : {{$booking['booked_by']}} </li>
                        <li>Age : {{$booking['age']}}  </li>
                        <li>Gender : {{$booking['gender']}}  </li>
                        <li>Contact : {{$booking['mobile']}}  </li>
                        <li>Address : {{$booking['address']}}  </li>
                        <li>Checkin : {{$booking['checkin']}} </li>
                        <li>Checkout : {{$booking['checkout']}}  </li>
                        <li>No. of Guest : {{$booking['no_of_guest']}} </li>
                       
                       

                    </ul>
                </div>
            </div>
            <h4 class="text-danger font-weight-bold mt-2">&#8377; {{$booking['amount']}} <span class="text-secondary"
                    style="font-size: small;">(Payable Amount at desk)</span></h4>
                    <p class="text-secondary">Paid amount may be different as shown here.</p>
           
        
            
        </div>
        <div class="card-footer">
          @if($booking['payment_status']=='Approved')
            <h5 class="font-weight-bold">Booking Status : <span class="text-success">{{$booking['payment_status']}}</span>
             <span><a href="/cancelBooking/{{$booking['id']}}" class="btn btn-md btn-outline-danger ml-4" onclick="cancelBooking()">Cancel Booking</a></span> </h5>
          @else
          <h5 class="font-weight-bold">Booking Status : <span class="text-danger">{{$booking['payment_status']}}</span> 
        </h5>
          @endif
        </div>
    </div>
    @endforeach

    <!-- <h3 class="text-danger text-center">Sorry..! No room available, Please check on some other date</h3> -->


</div>

@endsection