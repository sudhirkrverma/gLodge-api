@extends('layouts.masterDataLayout')

@section('content')
<div class="container">

    <h4 class="font-weight-bold text-center">
        || Update Room Category ||
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
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> {{Session::get('checkStatus')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    <form action="/admin/masterData/roomCategory/updateRoomCategories" method="post" enctype="multipart/form-data">
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

      
        <div class="form-group">
            <label for="service">Price </label>
            <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}"
                placeholder="&#8377" required>
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="lodge_status">{{ __('Available Status') }}</label>


            <select name="status" id="status" class="form-control" required autocomplete="off">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            @error('status')
            <div class="text-danger">{{ $message }}</div>
            @enderror


        </div>
        <div class="form-group">
            <label for="room_type_image" class="">{{ __('Room Category Image') }}</label>


            <input type="file"  id="room_type_image" class="form-control @error('room_type_image') is-invalid @enderror"
                name="room_type_image" value="{{ old('room_type_image')}}" required autocomplete="off">

            @error('room_type_image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>


        <input type="submit" class="btn btn-primary" value="Submit">
    </form>



</div>

@endsection