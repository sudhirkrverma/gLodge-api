@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="font-weight-bold text-center">
    || Gallery ||
  </h2>
  <div class="row mt-4">
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://source.unsplash.com/350x230/?nature" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://source.unsplash.com/350x230/?lake" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://source.unsplash.com/350x230/?river" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>

    </div>

  </div>
  <div class="row mt-4">
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://source.unsplash.com/350x230/?orange" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://source.unsplash.com/350x230/?fish" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://source.unsplash.com/350x230/?boat" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>

    </div>

  </div>
  <div class="row mt-4">
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://source.unsplash.com/350x230/?tree" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://source.unsplash.com/350x230/?mountain" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://source.unsplash.com/350x230/?waterfall" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>

    </div>

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