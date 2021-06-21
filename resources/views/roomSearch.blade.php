@extends('layouts.app')
<style>
   .facility ul li{
        font-size: 16px;
    }
</style>
@section('content')
<div class="container">
    <h2 class="text-success">In-Lodge available facilities</h2>
    <div class="facility mt-4">
        <div class="row ">
            @foreach($lodgeFacility as $lf)
            <div class="col-sm-6 m-0">
                <ul>
                    <li>{{$lf->facility}}</li>
                </ul>
            </div>
         

            @endforeach
        </div>
        <!-- <ul>
            <li>Twin, double or single beds</li>
            <li>Air conditioning or fan cooling system</li>
            <li>
                Satellite Television</li>
            <li>In-room safes (*)or a safe system at reception</li>
            <li>
                Tea and coffee making facilities</li>
            <li>
    
                All rooms have fresh air</li>
        </ul> -->
    <!-- <h4><u>Contact Details</u></h4>
    <h6>Owner Person : Manager</h6>
    <h6>Owner Contact : 9999999999</h6> -->

    <div class="row mt-4">
        <div class="col-sm-3 ">
            <img src="https://source.unsplash.com/290x170/?washroom" style="width: 100%;" class="img-thumbnail" alt="">
        </div>
        <div class="col-sm-3 ">
            <img src="https://source.unsplash.com/290x170/?hotel"  style="width: 100%;" class="img-thumbnail" alt="">
        </div>

        <div class="col-sm-3 ">
            <img src="https://source.unsplash.com/290x170/?meeting" style="width: 100%;" class="img-thumbnail" alt="">
        </div>
        <div class="col-sm-3 ">
            <img src="https://source.unsplash.com/290x170/?breakfast" style="width: 100%;" class="img-thumbnail" alt="">
        </div>
    </div>
    
    </div>
   


</div>
<hr>
<div class="container" >
    @if(Session::has('status'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{Session::get('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    @endif
    @if(Session::has('warning'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> {{Session::get('warning')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    @endif
    @if(Session::has('notAvailable'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> {{Session::get('notAvailable')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    @endif
    <h2 class="font-weight-bold text-center">
       Search Now
    </h2>
    <form action="/roomAvailable" method="post">
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
    
    <div class="form-group row">
    <label for="checkin"  class="col-sm-2">Checkin</label>
    <input type="date" class="form-control col-sm-10" id="checkin" name="checkin" value="{{old('checkin')}}" >
    @error('checkin')
    <div class="text-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group row">
        <label for="checkout" class="col-sm-2">Checkout</label>
        <input type="date" class="form-control col-sm-10" id="checkout" name="checkout" value="{{old('checkout')}}" >
        @error('checkout')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
    
 
  <div class="form-group row">
    <label for="noOfRoom" class="col-sm-2">Number of Room</label>
    <select name="noOfRoom" class="form-control col-sm-10" id="noOfRoom" >
        <option value="1">1</option>
       
    </select>
    <!-- <input type="number" class="form-control col-sm-10" id="noOfRoom" name="noOfRoom" value="1" > -->
    @error('noOfRoom')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group row">
    <label for="adult"class="col-sm-2">Number of Adult</label>
    <select name="adult" class="form-control col-sm-10" id="adult" >
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
    <!-- <input type="number" class="form-control col-sm-10" id="adult" name="adult" value="{{old('adult')}}" > -->
    @error('adult')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group row">
    <label for="Children"class="col-sm-2">Number of Children</label>
    <select name="children" class="form-control col-sm-10" id="children" >
        <!-- <option value="0">0 </option> -->
        <option value="0">0 </option>
        <option value="1">1</option>

    </select>
    <!-- <input type="number" class="form-control col-sm-10" id="children" name="children" value="{{old('children')}}" > -->
    @error('children')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1" required>
            <label class="form-check-label" for="gridCheck1">
                Agree to terms and conditions
            </label>
        </div>
    </div>
</div>
  <button type="submit" class="btn btn-primary  font-weight-bold" style="width: 100%; font-size: 18px;">Check Availability</button>
</form>

@endsection
@section('footer_scripts')

<script>


var start = new Date();
// set end date to max one year period:
var end = new Date(new Date().setYear(start.getFullYear() + 1));

$('#checkin').datepicker({
    startDate: start,
    endDate: end
    // update "toDate" defaults whenever "fromDate" changes
}).on('changeDate', function() {
    // set the "toDate" start to not be later than "fromDate" ends:
    $('#checkout').datepicker('setStartDate', new Date($(this).val()));
});

$('#checkout').datepicker({
    startDate: start,
    endDate: end
    // update "fromDate" defaults whenever "toDate" changes
}).on('changeDate', function() {
    // set the "fromDate" end to not be later than "toDate" starts:
    $('#checkin').datepicker('setEndDate', new Date($(this).val()));
});
</script>
@endsection