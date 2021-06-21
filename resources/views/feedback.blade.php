@extends('layouts.app')

@section('content')
<div class="container">
  @if(Session::has('status'))
  <!-- <p class="text-success">{{ Session::get('status') }}</p> -->
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> {{Session::get('status')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  @endif
  <h2 class="font-weight-bold text-center">
    || Feedback ||
  </h2>
  <form action="submitFeedback" method="post">
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
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
      @error('name')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

 
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="number" class="form-control" id="mobile" name="mobile" value="{{old('mobile')}}">
      @error('mobile')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}">
      @error('address')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="feedback">Feedback</label>
      <textarea class="form-control" id="feedback" name="feedback" value="{{old('feedback')}}" rows="5"
        placeholder="Write something for us"></textarea>
      @error('feedback')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary font-weight-bold" style="width: 100%; font-size: 18px;">Submit</button>
  </form>

  @foreach($userfeedback as $ufb)



  <div class="card m-4">
      <h6 class="card-header font-weight-bold">{{$ufb->name}} <span class="text-primary ml-4">{{$ufb->email}}</span>
          <span class="text-secondary ml-2" style="font-size: 13px;">{{$ufb->mobile}}</span>
          <span class="font-weight-bold" style="font-size: 14px; float:right;">Asked on : {{$ufb->created_at}} </span>
      </h6>
      <div class="card-body">

          <h6 class="text-seconadry">{{$ufb->feedback}}</h6>
  




      </div>
      <div class="card-footer">
        <span class="text-primary font-weight-bold">Replied </span>
             @if($ufb->reply=='')
             <textarea id="reply" name="reply" value="" rows="5" placeholder="No reply from Admin" class="form-control text-secondary" spellcheck="false"  readonly>{{$ufb->reply}}</textarea>

             @else
              <textarea id="reply" name="reply" value="" rows="5" placeholder="No reply from Admin" class="form-control  font-weight-bold" spellcheck="false"  readonly>{{$ufb->reply}}</textarea>
             <span class="text-success font-weight-bold">Replied on:- {{$ufb->updated_at}} </span>

           @endif

      
      </div>
  </div>
  @endforeach

</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('This is my contact details') }}
                </div>
            </div>
        </div>
    </div>
</div> -->


@endsection