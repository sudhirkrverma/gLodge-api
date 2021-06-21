@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="font-weight-bold text-center">
        || Booking History ||
    </h3>

    <div class="alert alert-primary  alert-dismissible fade show" role="alert">
        <strong>Success!</strong> List of all booking history.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    @if(Session::has('checkStatus'))
  <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Warning! </strong> {{Session::get('checkStatus')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  @endif




    <table class="table table-bordered yajra-datatable" id="table">
        <thead>
            <tr>
                <th class="text-center ">S.No.</th>
                <th class="text-center">Booking ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Room No.</th>
                <th class="text-center">Room Type</th>
                <th class="text-center">Lodge</th>
                <th class="text-center">Checkin</th>
                <th class="text-center">Checkout</th>
                <th class="text-center">Mobile</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>

            </tr>
        </thead>
        <tbody>
            @php
            $count=1;
            @endphp
            @foreach($bookingData as $booking)

            <tr>
                <td class="text-center font-weight-bold">{{$count++}}</td>
                <td class="text-center ">{{$booking->order_id}}</td>
                <td class="text-center ">{{$booking->booked_by}}</td>
                <td class="text-center ">{{$booking->username}}</td>
                <td class="text-center ">{{$booking->room_no}}</td>
                <td class="text-center ">{{$booking->room_type}}</td>
                <td class="text-center ">{{$booking->lodge_name}}</td>
                <td class="text-center ">{{$booking->checkin}}</td>
                <td class="text-center ">{{$booking->checkout}}</td>
                <td class="text-center ">{{$booking->mobile}}</td>
                @if($booking->payment_status=='Approved')
                <td class="text-center font-weight-bold text-success">{{$booking->payment_status}}</td>
                @elseif($booking->payment_status=='Cancelled')
                <td class="text-center text-danger">{{$booking->payment_status}}</td>
                @else
                <td class="text-center text-dark">Unknown Status</td>


                @endif


                <td><a href="/admin/cancelBooking/{{$booking->id}}" class="btn btn-sm btn-outline-danger">Cancel</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



</div>



@endsection