@extends('layouts.masterDataLayout')

@section('content')
<div class="container">

    <h4 class="font-weight-bold text-center">
        || Add Lodge Facility ||
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
    <form action="/glodge
/public/admin/masterData/lodge/addLodgeFacilities" method="post">
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
            <label for="service">Lodge Facility</label>
            <input type="text" class="form-control" id="facility" name="facility" value="{{old('facility')}}" required>
            @error('facility')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="lodge_status">{{ __('Facility Available') }}</label>


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