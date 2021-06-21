@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="font-weight-bold text-center">
        || Contact ||
    </h2>
    <h3 class="text-dark text-center">
        Government of Arunachal Pradesh
    </h3>
    <h3 class="text-dark text-center">
        Government Lodge Management System
    </h3>
    <h4 class="text-center mt-4"><b>HELP DESK</b></h4>
    <h5 class="text-center text-secondary">Office of Deputy Commissioner Complex, East Siang District, Pasighat,
        Arunachal Pradesh, INDIA</h5>
    <h5 class="text-secondary text-center">Email:- dio-esg@nic.in</h5>
    <h5 class="text-secondary text-center">IP Phone:- 22246</h5>
    <hr>
    <h4 class="text-center font-weight-bold">Circuit House Directory, Arunachal Pradesh</h4>
    <table class="table table-bordered" id="customers">

        <thead>
            <tr>
                <th class="text-center">Sl. No.</th>
                <th class="text-center">Guest House Name</th>
                <th class="text-center">STD Code</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Address</th>
                <th class="text-center">Email</th>

            </tr>
        </thead>


        </tr>
        </thead>

       
        <tbody>
            @php
            $count=1;
            @endphp
       
        @foreach($lodgeData as $lodge)
        <tr>

            <td class="text-center font-weight-bold">{{$count++}}</td>
            <td class="text-center">{{$lodge->lodge_name}}</td>
            <td class="text-center">0368</td>
            <td class="text-center">{{$lodge->receptionist_contact}}</td>
            <td class="text-center">{{$lodge->address}}</td>
            <td class="text-center">{{$lodge->username}}</td>
        </tr>
        @endforeach
        </tbody>

    </table>
</div>



@endsection