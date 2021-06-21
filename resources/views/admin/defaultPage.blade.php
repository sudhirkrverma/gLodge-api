@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="font-weight-bold text-center">
        || gLodge ||
    </h3>
    
    

  @if(Session::has('checkStatus'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> {{Session::get('checkStatus')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @endif
    <img src="{{ asset('admin/warning.png') }}" style=" display:block;width: 20%;  margin-left:auto; margin-right:auto; align:center;" alt="Image"/>
    <h5 class="text-success text-center">Kindly do the needful.</h5>








</div>


@endsection