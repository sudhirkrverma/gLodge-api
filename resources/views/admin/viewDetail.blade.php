@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="font-weight-bold text-center">
        || Lodge Detail ||
    </h2>
    
    <div class="alert alert-success m-4 alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Detailed information.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>





    <div class="card m-4">
        <h5 class="card-header font-weight-bold">{{$lodge['lodge_name']}}<span
                class="text-primary ml-4" style="font-size: small; float: right;" >{{$lodge['address']}}</span> 
              </h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5"><img src="https://source.unsplash.com/380x230/?room" alt=""></div>
                <div class="col-sm-5">
                    <h5 class="text-success"><u><em>Lodge/Hotel Information </em></u>:-</h5>
                    <ul>
                        <li>Owner Name : {{$lodge['owner_name']}}</li>
                        <li>Owner Contact No : {{$lodge['owner_contact']}}</li>
                        <li>Email : {{$lodge['username']}}</li>
                        <li>Receptionist Contact No : {{$lodge['receptionist_contact']}}</li>
                        <li>Tag line/Description : {{$lodge['description']}}</li>
                        <li>No. of Registered Room : {{$noOfRoom}}</li>
                        <li>No. of Room Categories : {{$noOfRoomCategory}}</li>
                        <li>No. of Bookings till now : {{$noOfBooking}}</li>
                      
                        @if($lodge['status']==1)
                        <li >Status : <span class="text-success">Active</span> </li>
                        @else
                        <li >Status : <span class="text-danger">De-Activated</span> </li>
                        @endif
                       
                       
                       

                    </ul>
                </div>
            </div>
           
                 

          
            
        </div>
        <div class="card-footer">
            <h5 class="font-weight-bold">Onboarded on : <span class="text-success" style="font-size: small;">{{$lodge['created_at']}}</span> </h5>
           
        </div>
    </div>


</div>


@endsection