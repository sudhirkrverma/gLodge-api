@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="font-weight-bold text-center">
        || User Feedback ||
    </h2>
    @if(Session::has('status'))
    <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success! </strong> {{Session::get('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
    @endif

    <div class="alert alert-primary m-4 alert-dismissible fade show" role="alert">
        <strong>Info! </strong> These are all your feedback from users.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- Here we extract all the feedback -->
    
    @foreach($feedback as $fb)



    <div class="card m-4">
        <h6 class="card-header font-weight-bold">{{$fb->name}} <span class="text-primary ml-4">{{$fb->email}}</span>
            <span class="text-secondary ml-2" style="font-size: 13px;">{{$fb->mobile}}</span>
            <span class="font-weight-bold" style="font-size: 14px; float:right;">Asked on : {{$fb->created_at}} </span>
        </h6>
        <div class="card-body">

            <h6 class="text-seconadry">{{$fb->feedback}}</h6>
    




        </div>
        <div class="card-footer">
            <form action="/superadmin/feedback/reply" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$fb->id}}" required>
                <textarea id="reply" name="reply" value="" rows="5" placeholder="Reply to the user" class="form-control" spellcheck="false" required></textarea>
                @error('reply')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="submit" class="btn btn-sm btn-outline-success mt-2" value="Submit"> 

            </form>
        </div>
    </div>
    @endforeach

</div>


@endsection