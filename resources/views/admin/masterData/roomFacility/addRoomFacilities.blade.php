@extends('layouts.masterDataLayout')

@section('content')
<div class="container">

    <h4 class="font-weight-bold text-center">
        || Add / Update Room Category Facility ||
    </h4>
    @if(Session::has('status'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{Session::get('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    @if(Session::has('checkStatus'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Info !</strong> {{Session::get('checkStatus')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    <form action="/glodge/public/admin/masterData/roomFacility/addRoomFacilities" method="post">
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
        <div class="form-group">
            <label for="service">Room Type</label>
            <select name="room_type" id="room_type" class="form-control" required autocomplete="off">
                <option value="">--Select Room Category--</option>
                @foreach($roomCategory as $rc)
                <option value="{{$rc->room_type}}">{{$rc->room_type}}</option>

                @endforeach
            </select>
            <!-- <input type="text" class="form-control" id="room_type" name="room_type" value="{{old('room_type')}}"
                required> -->
            @error('room_type')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="status">Single Bed </label>
                <select class="form-control" id="single_bed" name="single_bed" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                @error('single_bed')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="col">
                <label for="status">Double Bed </label>
                <select class="form-control" id="double_bed" name="double_bed" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>




                </select>
                @error('double_bed')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="status">Bathroom </label>
                <select class="form-control" id="bathroom" name="bathroom" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>
                @error('status')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="col">
                <label for="status">Toilet</label>
                <select class="form-control" id="toilet" name="toilet" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>
                @error('toilet')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="status">TV </label>
                <select class="form-control" id="tv" name="tv" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>
            </div>
            <div class="col">
                <label for="status">WIFI</label>
                <select class="form-control" id="wifi" name="wifi" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>
                @error('wifi')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="status">AC </label>
                <select class="form-control" id="ac" name="ac" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>
                @error('ac')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="col">
                <label for="status">Geyser</label>
                <select class="form-control" id="geyser" name="geyser" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>
                @error('geyser')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
        </div>

        <input type="submit" class="btn btn-primary mt-3" value="Submit">
    </form>



</div>

@endsection