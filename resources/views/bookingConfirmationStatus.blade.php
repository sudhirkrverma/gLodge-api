@extends('layouts.app')

@section('content')
<div class="container">

   
   


<div class="alert alert-success m-4 alert-dismissible fade show" role="alert">
    <strong>Success!</strong> {{$message}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>




    <div class="card m-4">
        
        <div class="card-header">
        <h5 class="font-weight-bold">{{$data['room_no']}}- {{$data['room_type']}} <span
                class="text-primary ml-4"> {{$data['lodge_name']}}</span> 
                <span class="font-weight-bold" style="font-size: 16px; float:right;">Booking ID: <span class="text-success">{{$bookingID}}</span> </span></h5>
                <h6 class="text-secondary font-weight-bold ">{{$lodge_address}}</h6>

        </div>
       
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5"><img src="{{ asset('admin/room_images/') }}/{{$data['room_image']}}" style="width: 100%; height: 95%;" alt="Image"/> </div>
                <div class="col-sm-5">
                    <h5 class="text-success"><u><em>Your booking information </em></u>:-</h5>
                    <ul>
                        <li>Name : {{$data['fname']}} {{$data['lname']}} </li>
                        <li>Age : {{$data['age']}}  </li>
                        <li>Gender : {{$data['gender']}}  </li>
                        <li>Contact : {{$data['mobile']}}  </li>
                        <li>Address : {{$address}}  </li>
                        <li>Checkin : {{$data['checkin']}} ({{$checkinDay}}) </li>
                        <li>Checkout : {{$data['checkout']}} ({{$checkoutDay}})  </li>
                        <li>No. of Guest : {{$data['adult'] + $data['children']}}  </li>
                       
                       

                    </ul>
                </div>
            </div>
            <h4 class="text-danger font-weight-bold mt-2">&#8377; {{$data['amount']}} <span class="text-secondary"
                    style="font-size: small;">(Payable Amount at desk)</span></h4>
                    <p class="text-secondary">Payable amount may be differ so kindly confirm with Lodge/Hotel.</p>
            <p class="card-text">{{$lodge_desc}}</p>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            
        </div>
        <div class="card-footer">
            <h5 class="font-weight-bold">Booking Status : <span class="text-success">{{$bookingStatus}}</span> 
        </h5>
        </div>
    </div>


    <!-- <h3 class="text-danger text-center">Sorry..! No room available, Please check on some other date</h3> -->


</div>
@endsection