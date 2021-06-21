@extends('layouts.masterDataLayout')

@section('content')
<div class="container">

    <h4 class="font-weight-bold text-center">
        || Add Room ||
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
    <form action="/admin/masterData/room/addRoom" method="post" enctype="multipart/form-data">
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

            @error('room_type')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="service">Room No. </label>
            <input type="number" class="form-control" id="room_no" name="room_no" value="{{old('room_no')}}"
                required>
            @error('room_no')
            <div class="text-danger">{{ $message }}</div>
            @enderror
           
        </div>
        <div class="form-group">
            <label for="room_img1" class="">{{ __('Room Image 1') }} (Bed Room)</label>


            <input type="file"  id="room_img1" class="form-control @error('room_img1') is-invalid @enderror"
                name="room_img1" value="{{ old('room_img1')}}" required autocomplete="off">

            @error('room_img1')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small class="text-secondary">Please add landscape images for better view and experience.</small>
        </div>
        <div class="form-group">
            <label for="room_img2" class="">{{ __('Room Image 2') }} (TV/Meeting Place)</label>


            <input type="file"  id="room_img2" class="form-control @error('room_img2') is-invalid @enderror"
                name="room_img2" value="{{ old('room_img2')}}" required autocomplete="off">

            @error('room_img2')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small class="text-secondary">Please add landscape images for better view and experience.</small>


        </div>
        <div class="form-group">
            <label for="room_img3" class="">{{ __('Room Image 3') }} (Washroom)</label>


            <input type="file"  id="room_img2" class="form-control @error('room_img3') is-invalid @enderror"
                name="room_img3" value="{{ old('room_img3')}}" required autocomplete="off">

            @error('room_img3')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small class="text-secondary">Please add landscape images for better view and experience.</small>


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
      


        <input type="submit" class="btn btn-primary" value="Submit">
    </form>



</div>

@endsection