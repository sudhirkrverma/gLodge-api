@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <h2 class="font-weight-bold text-center">|| Available Rooms - {{$total}}||</h2>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Alert!</strong> before proceeding to booking, Kindly refresh the page to get latest data.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>



 

    @if($total)

    @foreach($rooms as $room)




    <div class="card m-4">
        <h5 class="card-header font-weight-bold">{{$room->room_no}}- {{$room->room_type}} <span
                class="text-primary ml-4"> {{$room->lodge_name}}</span> <span class="text-secondary ml-2"
                style="font-size: 13px; float:right;">{{$room->address}}</span></h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5"><img src="{{ asset('admin/RoomCategory_images/') }}/{{$room->image}}"  style="width:100%; height:auto;" alt=""></div>
                <div class="col-sm-5">
                    <h5 class="text-success"><u><em>Services</em></u>:-</h5>
                    <ul>
                        <li><i class="fa fa-bed"></i> Single Bed : {{$room->single_bed}}</li>
                        <li><i class="fa fa-bed"></i>  Double Bed : {{$room->double_bed}}</li>
                        <li><i class="fa fa-bath"></i> Bathroom : {{$room->bathroom}}</li>
                        <li><i class="fa fa-bath"></i> Toilet : {{$room->toilet}}</li>
                        <li><i class="fa fa-tv"></i> TV : {{$room->tv}}</li>
                        <li><i class="fa fa-wifi"></i> WIFI : {{$room->wifi}}</li>
                        <li><i class="fa fa-filter"></i> Geyser : {{$room->geyser}}</li>
                        <li><i class="fa fa-cloud-download"></i> AC : {{$room->ac}}</li>

                    </ul>
                </div>
            </div>
            <h4 class="text-danger font-weight-bold mt-2">&#8377; {{$room->price}} <span class="text-secondary"
                    style="font-size: small;">(Per room per night)</span></h4>
            <p class="card-text">{{$room->description}}</p>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <div class="row">
                <div class="ml-2">
                    <form action="viewDetail" target="_blank" method="post">
                        @csrf
                       
                        <input type="hidden" name="room" value="{{$room}}">
                        <input type="hidden" name="checkin" value="{{$data['checkin']}}">
                        <input type="hidden" name="checkout" value="{{$data['checkout']}}">
                        <input type="hidden" name="adult" value="{{$data['adult']}}">
                        <input type="hidden" name="children" value="{{$data['children']}}">
                        <input type="hidden" name="noOfRoom" value="{{$data['noOfRoom']}}">
                        <input type="submit" class="btn btn-outline-dark" value="View Details">
                    </form>
                </div>
                <div class="ml-2">
                    <form action="directBookingRequest" method="post">
                        @csrf
                        
                        <input type="hidden" name="room" value="{{$room}}">
                        <input type="hidden" name="checkin" value="{{$data['checkin']}}">
                        <input type="hidden" name="checkout" value="{{$data['checkout']}}">
                        <input type="hidden" name="adult" value="{{$data['adult']}}">
                        <input type="hidden" name="children" value="{{$data['children']}}">
                        <input type="hidden" name="noOfRoom" value="{{$data['noOfRoom']}}">
                        <input type="submit" class="btn btn-success" value="Book Now">
                    </form>
                </div>
            </div>

        </div>
    </div>

    @endforeach
    @else
    <h3 class="text-danger text-center">Sorry..! No room available, Please check on some other date</h3>
    @endif

</div>
@endsection