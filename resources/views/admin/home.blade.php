@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="font-weight-bold text-center">
        || Lodge ||
    </h3>
    
    <div class="alert alert-success m-4 alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Registered Lodges/Hotels on Government Lodge Management System.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  @if(Session::has('checkStatus'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> {{Session::get('checkStatus')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif





    
  <div class="card m-4">
        <h5 class="card-header font-weight-bold">{{$lodge->lodge_name}}<span
                class="text-primary ml-4" style="font-size: small; float: right;" >{{$lodge->address}}</span> 
              </h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5"><img src="{{ asset('admin/lodge_images/') }}/{{$lodge->lodge_img}}" style="width: 100%; height: 100%;" alt="Image"/></div>
                <div class="col-sm-5">
                    <h5 class="text-success"><u><em>Lodge/Hotel Information </em></u>:-</h5>
                    <ul>
                        <li>Owner Name : {{$lodge->owner_name}}</li>
                        <li>Owner Contact No : {{$lodge->owner_contact}}</li>
                        <li>Email : {{$lodge->username}}</li>
                        <li>Receptionist Contact No : {{$lodge->receptionist_contact}}</li>
                        <li>Tag line/Description : {{$lodge->description}}</li>
                        <li>No. of Room Registered : {{$noOfRoom}}</li>
                        <li>No. of Room Category : {{$noOfRoomCategory}}</li>
                        <li>No. of Bookings Till Now : {{$noOfBooking}}</li>
                        <!-- <li>Status : {{$lodge->status}}</li> -->
                        @if($lodge->status==1)
                        <li >Status : <span class="text-success">Active</span> </li>
                        @else
                        <li >Status : <span class="text-danger">Not Available</span> <span class="font-weight-bold">(Kindly Contact to the Superadmin for Activation)</span></li>
                        @endif
                       
                       
                       

                    </ul>
                </div>
            </div>
           
                 

          
            
        </div>
        <div class="card-footer">
            <h5 class="font-weight-bold">Onboarded on : <span class="text-success" style="font-size: small;">{{$lodge->created_at}}</span> </h5>
            <!-- <a href="/admin/changeStatus/{{$lodge->id}}" class="btn btn-outline-danger" >Change Status</a> -->
           
        </div>
    </div>

</div>


@endsection