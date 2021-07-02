@extends('layouts.masterDataLayout')
<style>
      .tile {

border-radius: 16px;
width: 100px;
height: 120px;
margin: 10px;
color: aliceblue;
min-width: 21%;

}

</style>
@section('content')
<div class="container">

    <h3 class="text-center  font-weight-bold"><marquee behavior="alternate" direction="left" >|| Master Data ||</marquee></h3>
    
    <div class="row ml-4">
        <div class="tile col-md-2 ml-2 bg-danger">
            <h3 class=" text-dark font-weight-bold mt-3">{{count($lodgeFacility)}}</h3>
            <h5 class="  mt-1">
                Lodge Facilities
            </h5>
        </div>
        <div class="tile col-md-2 ml-2 bg-info" style="background-color: #007bff!important;">
               <h3 class=" text-dark font-weight-bold mt-3">{{count($roomCategory)}}</h3>
            <h5 class="  mt-1">
                Room Categories
            </h5>
        </div>
        <div class="tile col-md-2 ml-2 bg-success "  style="background-color: #28a745!important;">
            <h3 class=" text-dark font-weight-bold mt-3">{{count($room)}}</h3>
            <h5 class="  mt-1">Room</h5>
        </div>
        <div class="tile col-md-2 ml-2 bg-info" style="background-color: #007bff!important;">
            <h3 class=" text-dark font-weight-bold mt-3">{{count($booking)}}</h3>
            <h5 class="  mt-1 ">Booking</h5>
        </div>
     
       
    </div>
    <h4 class="font-weight-bold text-center mt-4">Avaiable Room </h4>
    <table class="table table-bordered yajra-datatable" id="customers">
    <thead>
        <tr>
            <th class="text-center ">S.No.</th>
            <th class="text-center">Room No.</th>
            <th class="text-center">Room Type</th>

            <th class="text-center">Status</th>
            
        </tr>
    </thead>
    <tbody>
    @php
    $count=1;
    @endphp
    @foreach($room as $r)
        <tr>
            <td class="text-center font-weight-bold">{{$count++}}</td>
            <td class="text-center ">{{$r->room_no}}</td>
            <td class="text-center ">{{$r->room_type}}</td>

       
            @if($r->room_status==1)
            <td class="text-center text-success">Active</td>
            @else
            <td class="text-center text-danger">Not Available</td>
            @endif
        </tr>
   @endforeach
    </tbody>
</table>
<br>

    <h4 class="font-weight-bold text-center mt-4">Avaiable Room Categories</h4>
    <table class="table table-bordered yajra-datatable" id="customers">
    <thead>
        <tr>
            <th class="text-center ">S.No.</th>
            <th class="text-center">Room Type</th>
            <th class="text-center">Image</th>
            <th class="text-center">Room Facilities</th>
            <th class="text-center">Price</th>
            <th class="text-center">Status</th>
        
            
        </tr>
    </thead>
    <tbody>
    @php
    $count=1;
    @endphp
    @foreach($roomCategory as $rc)
    
        <tr>
            <td class="text-center font-weight-bold">{{$count++}}</td>
            <td class="text-center ">{{$rc->room_type}}</td>
            <td class="text-center "><img src="{{ asset('admin/RoomCategory_images/') }}/{{$rc->image}}" width="180px" height="150px" alt="Image"/> </td>
         
     
         
            <td class="">
                <ul>
                <li>Bathrooom : {{$rc->bathroom}}</li>
                <li>Toilet : {{$rc->toilet}}</li>
                <li>Single Bed : {{$rc->single_bed}}</li>
                <li>Double Bed : {{$rc->double_bed}}</li>
                <li>No. of Bed : {{$rc->no_of_bed}}</li>
                <li>TV : {{$rc->tv}}</li>
                <li>WIFI : {{$rc->wifi}}</li>
                <li>Geyser : {{$rc->geyser}}</li>
                <li>AC : {{$rc->ac}}</li>
                </ul>
            </td>
      
            <td class="text-center ">{{$rc->price}}</td>
            @if($rc->status==1)
            <td class="text-center text-success">Active</td>
            @else
            <td class="text-center text-danger">Not Available</td>
            @endif
            
      
        
        </tr>
   @endforeach
    </tbody>
</table>
<span class="text-danger">Note:- If Room Facilities are not added then Room Category will not shown here.</span>
<br>
<!-- 
<h5 class="font-weight-bold text-center mt-4">Avaiable Room Facilities</h5>
    <table class="table table-bordered yajra-datatable" id="customers">
    <thead>
        <tr>
            <th class="text-center ">S.No.</th>
            <th class="text-center">Room Type</th>
            <th class="text-center">Bathroom</th>
            <th class="text-center">Toilet</th>
            <th class="text-center">Single Bed</th>
            <th class="text-center">Double Bed</th>
            <th class="text-center">No. of Bed</th>
            <th class="text-center">TV</th>
            <th class="text-center">WIFI</th>
            <th class="text-center">Geyser</th>
            <th class="text-center">AC</th>
        
            
        </tr>
    </thead>
    <tbody>
    @php
    $count=1;
    @endphp
    @foreach($roomFacility as $rf)
    
        <tr>
            <td class="text-center font-weight-bold">{{$count++}}</td>
            <td class="text-center ">{{$rf->room_type}}</td>
            <td class="text-center ">{{$rf->bathroom}}</td>
            <td class="text-center ">{{$rf->toilet}}</td>
            <td class="text-center ">{{$rf->single_bed}}</td>
            <td class="text-center ">{{$rf->double_bed}}</td>
            <td class="text-center ">{{$rf->no_of_bed}}</td>
            <td class="text-center ">{{$rf->tv}}</td>
            <td class="text-center ">{{$rf->wifi}}</td>
            <td class="text-center ">{{$rf->geyser}}</td>
            <td class="text-center ">{{$rf->ac}}</td>
           
            
      
        
        </tr>
   @endforeach
    </tbody>
</table> -->

    <h4 class="font-weight-bold text-center mt-4">Avaiable Lodge Facilities</h4>
    <table class="table table-bordered yajra-datatable" id="customers">
    <thead>
        <tr>
            <th class="text-center ">S.No.</th>
            <th class="text-center">Lodge Facility</th>
            <th class="text-center">Status</th>
         
            
        </tr>
    </thead>
    <tbody>
    @php
    $count=1;
    @endphp
    @foreach($lodgeFacility as $lf)
        <tr>
            <td class="text-center font-weight-bold">{{$count++}}</td>
            <td class="text-center ">{{$lf->facility}}</td>
   
            @if($lf->status==1)
            <td class="text-center text-success">Active</td>
            @else
            <td class="text-center text-danger">Not Available</td>
            @endif
          
        
        </tr>
   @endforeach
    </tbody>
</table>


    
</div>


@endsection