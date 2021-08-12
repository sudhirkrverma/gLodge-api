@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="font-weight-bold text-center">
        || Book Now ||
    </h2>
    <a href="/roomSearch">
        <h4 class="text-danger font-weight-bold">&lt;Modify Your Booking</h4>
    </a>
   
    <div class="row">
        <div class="col-md-8 firsthalf">
            <div class="card">
                <h4 class="card-header font-weight-bold">Enter Your Details</h4>
                <div class="card-body">
                    <h5 class="card-title mb-3">We will use these details to share your booking information</h5>
                    <!-- here the form start -->
                    <form action="/glodge/public/bookingConfirmation" method="POST">
                        @if ( session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            Please fix the following errors
                        </div>
                        @endif
                     
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fname" class="font-weight-bold">First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname"
                                    placeholder="Enter first name" value="{{old('fname')}}">
                                    @error('fname')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lname" class="font-weight-bold" style="font-size:16px">Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" value="{{old('lname')}}"
                                    placeholder="Enter first name">
                                    @error('lname')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="age" class="font-weight-bold" style="font-size:16px">Age</label>
                                <input type="text" class="form-control" id="age" name="age"
                                    placeholder="Enter youe age" value="{{old('age')}}">
                                    @error('age')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender" class="font-weight-bold" style="font-size:16px">Gender</label>
                                <select name="gender" class="form-control" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                                @error('gender')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                               
                                  
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mobile" class="font-weight-bold" style="font-size:16px">Mobile</label>
                                <input type="number" class="form-control" id="mobile" name="mobile"
                                    placeholder="Enter your mobile" value="{{old('mobile')}}">
                                    @error('mobile')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address" class="font-weight-bold" style="font-size:16px">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}"
                                    placeholder="Enter your address">
                                    @error('address')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="district" class="font-weight-bold" style="font-size:16px">District</label>
                                <input type="text" class="form-control" id="district" name="district"
                                    placeholder="Enter district name" value="{{old('district')}}">
                                    @error('district')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="state" class="font-weight-bold" style="font-size:16px">State</label>
                                <!-- <input type="text" class="form-control" id="state" name="state" value="{{old('state')}}"
                                    placeholder="Select State"> -->
                                    <select name="state" class="form-control" id="state" required>
                                    <option value="">--Select State-- </option>
                                    <option value="Andaman and Nicobar">Andaman and Nicobar</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Ladakh">Ladakh</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Pondicherry">Pondicherry</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="UT of DNH and DD">UT of DNH and DD</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                                    <option value="Others">Others</option>


                                </select>
                                    @error('state')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                            </div>
                        </div>
                        <!-- These are all the parameter that received from previous pages -->
                        <input type="hidden" name="room_no" value="{{$data['room_no']}}" readonly>
                        <input type="hidden" name="room_type" value="{{$data['room_type']}}" readonly>
                        <input type="hidden" name="room_image" value="{{$data['room_image']}}" readonly>
                        <input type="hidden" name="lodge_id" value="{{$data['lodge_id']}}" readonly>
                        <input type="hidden" name="lodge_name" value="{{$data['lodge_name']}}" readonly>
    
                        <input type="hidden" name="checkin" value="{{$data['checkin']}}" readonly>
                        <input type="hidden" name="checkout" value="{{$data['checkout']}}" readonly>
                        <input type="hidden" name="noOfRoom" value="{{$data['noOfRoom']}}" readonly>
                        <input type="hidden" name="adult" value="{{$data['adult']}}" readonly>
                        <input type="hidden" name="children" value="{{$data['children']}}" readonly>
                        <input type="hidden" name="guest" value="{{$data['adult']+$data['children']}}" readonly>
                        <input type="hidden" name="amount" value="{{$data['price']  * $interval}} " readonly>
         
                      
                        <input type="submit" class="btn btn-success font-weight-bold mb-2" style="width: 100%; font-size: 16px;" value="Continue to Book">

                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-4 secondhalf" style="box-shadow: #b38d8d 5px 5px 4px 4px">
            <div id="greeting">
                <h5 class="text-center font-weight-bold mt-2"
                    style="background-color: red; color: white; padding: 12px; border-radius: 20px; ">
                    {{$data['room_no']}}- {{$data['room_type']}}, {{$data['lodge_name']}}
                </h5>

            </div>
            <div id="customerDetails">
                <h4 class="text-danger font-weight-bold mt-2">&#8377; {{$data['price']}}  <span class="text-secondary"
                        style="font-size: small;">(Per room per night)</span></h4>
                <h6 class="text-info font-weight-bold">The actual price may be differ from the prices shown here.</h6>

                <!-- from here we will start the form -->

                <form action="#" method="POST">
                


                 

                    <div class="form-group">
                        <label for="exampleInputEmail1">From :</label>
                        <input type="text" class="form-control" id="" name="" aria-describedby="emailHelp"
                            value="{{$data['checkin']}}  ({{$checkinDay}})" placeholder="From" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">To :</label>
                        <input type="text" class="form-control" id="" name="" value="{{$data['checkout']}} ({{$checkoutDay}})"
                            placeholder="To" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" name=""
                            value="{{$data['noOfRoom']}} Room, {{$data['adult']+$data['children']}} Guest"
                            placeholder="details" readonly>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h5 class="">Payable Amount</h5>
                            <h6 class="text-secondary">(Inclusive of all taxes)</h6>
                        </div>
                        <div class="form-group col-md-6">
                            <h5 class="font-weight-bold" style="text-align: end;">&#8377; {{$data['price']  * $interval}} </h5>
                        </div> 
                        <div class="form-group col-md-12 mb-0">
                            
                            <h5 class="text-dark text-center" style="background-color: blanchedalmond; padding: 14px;">You can pay at desk.!</h5>
                        </div>
                    </div>
                    <!-- Here we press continue -->
                        <!-- <input type="submit" class="btn btn-success font-weight-bold mb-2" style="width: 100%; font-size: 16px;" value="Continue to Book"> -->
                   
                </form>
                <!-- <h6 class="text-danger font-weight-bold mt-4">Cancellation Policy <span>&#9432;</span></h6>
                <h6 class="text-danger font-weight-bold mt-4">Follow safety measures advised at the hotel</h6>
                <h6 class="text-secondary font-weight-bold mt-4">By proceeding, you agree to our <span
                        class="text-danger font-weight-bold">Guest Policies</span></h6> -->

            </div>
        </div>

    </div>


</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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
    </div>
</div> -->


@endsection