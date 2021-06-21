@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class="font-weight-bold text-center">|| Room Details||</h3>


    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('admin/RoomCategory_images/') }}/{{$room->img1}}" style="width: 100%; height: 65vh;" class="d-block " alt="...">
                <!-- <img src="{{$room->img1}}" class="d-block " alt="..."> -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>Room View</h5>
                    <p>Bed Room</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="{{ asset('admin/RoomCategory_images/') }}/{{$room->img2}}" style="width: 100%; height: 65vh;" class="d-block " alt="...">
                <!-- <img src="{{$room->img2}}" class="d-block " alt="..."> -->

                <div class="carousel-caption d-none d-md-block">
                    <h5>Room View</h5>
                    <p>TV/Meeting Place</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="{{ asset('admin/RoomCategory_images/') }}/{{$room->img3}}" style="width: 100%; height: 65vh;" class="d-block " alt="...">
                <!-- <img src="{{$room->img3}}" class="d-block " alt="..."> -->

                <div class="carousel-caption d-none d-md-block">
                    <h5>Room View</h5>
                    <p>Washroom</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    
    <div class="row mt-4">
        <div class="col-md-8 firsthalf">
            <h5 class="card-header font-weight-bold">{{$room->room_no}}- {{$room->room_type}} <span
                    class="text-primary ml-4"> {{$room->lodge_name}}</span> </h5>


            <h6 class="text-secondary font-weight-bold  mt-2 ml-3"><em>Location:- {{$room->address}}</em></h6>
            <hr>
            <h5 class="font-weight-bold">Description</h5>
            <p class="text-dark">The COVID19 pandemic has made us all understand the importance of sanitization and not
                take it for granted. Rest assured, we have reached out to our partners to uphold the highest standards
                of sanitation and safety.</p>
            <h5 class="font-weight-bold text-success">Services</h5>
            <ul>
                <li><i class="fa fa-bed"></i> Single Bed : {{$room->single_bed}}</li>
                <li><i class="fa fa-bed"></i> Double Bed : {{$room->double_bed}}</li>
                <li><i class="fa fa-bath"></i> Bathroom : {{$room->bathroom}}</li>
                <li><i class="fa fa-bath"></i> Toilet : {{$room->toilet}}</li>
                <li><i class="fa fa-tv"></i> TV : {{$room->tv}}</li>
                <li><i class="fa fa-wifi"></i> WIFI : {{$room->wifi}}</li>
                <li><i class="fa fa-filter"></i> Geyser : {{$room->geyser}}</li>
                <li><i class="fa fa-cloud-download"></i> AC : {{$room->ac}}</li>

            </ul>
            <!-- <p class="text-dark">Room type: Double Suit, Single Bed: 1, Double Bed: 1, Toilet Attached: Yes, Bathroom Attached: Yes, TV: Yes, WIFI: Yes, Geyser: Yes, AC: Yes</p> -->
            <h5 class="text-danger font-weight-bold">Attention</h5>
            <div id="attention">
                <p class="font-weight-bold" style="background-color: #dbf166;margin: 10px;
            border-radius:10px; padding: 10px;">Please check the travel advisory issued by the concerned state
                    government/local authorities before booking as, some places may have COVID-19 related travel/lodging
                    restriction.</p>

            </div>
            <h5 class="font-weight-bold">Hotel Policies</h5>
            <span class="text-info">Chekcin: 11:00 AM</span>
            <span class="text-secondary">||</span>
            <span class="text-info">Checkout: 12:00 PM</span>
            <ul>
                <li>Please check travel advisory issued by the concerned state government /local authorities before
                    booking, as some places may have COVID-19 related travel/lodging restrictions.</li>
                <li>Guests can check in using any local or outstation ID proof.</li>
                <li>The Actual Room charge may be differ from the charges shown here.</li>
            </ul>

        </div>
        <div class="col-md-4 secondhalf" style="box-shadow: #b38d8d 5px 5px 4px 4px">
            <div id="greeting">
                <h5 class="text-center font-weight-bold mt-2"
                    style="background-color: red; color: white; padding: 12px; border-radius: 20px; ">Welcome to
                    Government Lodge Booking System</h5>

            </div>
            <div id="customerDetails">
                <h4 class="text-danger font-weight-bold mt-2">&#8377; {{$room->price}} <span class="text-secondary"
                        style="font-size: small;">(Per room per night)</span></h4>
                <h6 class="text-info font-weight-bold">The actual price may be differ from the prices shown here.</h6>

                <!-- from here we will start the form -->

                <form action="/indirectBookingRequest" method="POST">
                    @csrf

                    <!-- <input type="hidden" name="room_no" value="{{$room->room_no}}" readonly> -->
                    <input type="hidden" name="room_no" value="{{$room->room_no}}" readonly>
                    <input type="hidden" name="room_type" value="{{$room->room_type}}" readonly>
                    <input type="hidden" name="room_image" value="{{$room->img1}}" readonly>
                    <input type="hidden" name="lodge_id" value="{{$room->lodge_id}}" readonly>
                    <input type="hidden" name="lodge_name" value="{{$room->lodge_name}}" readonly>
                    <input type="hidden" name="price" value="{{$room->price}}" readonly>

                    <input type="hidden" name="checkin" value="{{$data['checkin']}}" readonly>
                    <input type="hidden" name="checkout" value="{{$data['checkout']}}" readonly>
                    <input type="hidden" name="noOfRoom" value="{{$data['noOfRoom']}}" readonly>
                    <input type="hidden" name="adult" value="{{$data['adult']}}" readonly>
                    <input type="hidden" name="children" value="{{$data['children']}}" readonly>

                    <div class="form-group">
                        <label for="exampleInputEmail1">From :</label>
                        <input type="date" class="form-control" id="from" name="checkin" aria-describedby="emailHelp"
                            value="{{$data['checkin']}}" placeholder="From" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">To :</label>
                        <input type="date" class="form-control" id="to" name="checkout" value="{{$data['checkout']}}"
                            placeholder="To" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="detail" name="detail"
                            value="{{$data['noOfRoom']}} Room, {{$data['adult']+$data['children']}} Guest"
                            placeholder="details" readonly>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">Confirm to proceed</label>
                    </div>
                    <!-- Here we press continue -->
                    <input type="submit" class="btn btn-success font-weight-bold" style="width: 100%;" name="submit"
                        value="Continue">
                </form>
                <h6 class="text-danger font-weight-bold mt-4">Cancellation Policy <span>&#9432;</span></h6>
                <h6 class="text-danger font-weight-bold mt-4">Follow safety measures advised at the hotel</h6>
                <h6 class="text-secondary font-weight-bold mt-4">By proceeding, you agree to our <span
                        class="text-danger font-weight-bold">Guest Policies</span></h6>

            </div>
        </div>

    </div>
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  <h2 class="font-weight-bold text-center">
        || View Detail ||
    </h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('This is my contact details') }}
                </div>
            </div>
        </div>
    </div> -->
</div>


@endsection