@extends('layouts.masterDataLayout')

@section('content')
<div class="container">

    <h4 class="text-center text-info">|| Master Data ||</h4>
    <h5 class="font-weight-bold text-center mt-4">Avaiable Room </h5>
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


    <h5 class="font-weight-bold text-center mt-4">Avaiable Room Categories</h5>
    <table class="table table-bordered yajra-datatable" id="customers">
    <thead>
        <tr>
            <th class="text-center ">S.No.</th>
            <th class="text-center">Room Type</th>
            <th class="text-center">Image</th>
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
</table>

    <h5 class="font-weight-bold text-center mt-4">Avaiable Lodge Facilities</h5>
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