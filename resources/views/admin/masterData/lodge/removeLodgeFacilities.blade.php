@extends('layouts.masterDataLayout')

@section('content')
<div class="container">

    <h4 class="font-weight-bold text-center">
        || Remove Lodge Facility ||
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

    <form action="/admin/masterData/lodge/removeLodgeFacilities" method="post">
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
            <label for="facility">Lodge Facility</label>
            <select name="facility" class="form-control" id="facility" required>
                <option value="">-- Select Lodge Facility --</option>
                @foreach($lodgeFacility as $facility)
                <option value="{{$facility->id}}">{{$facility->facility}}</option>
                @endforeach

            </select>
            
            @error('facility')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        


        <input type="submit" class="btn btn-primary" value="Remove">
    </form>



</div>

@endsection