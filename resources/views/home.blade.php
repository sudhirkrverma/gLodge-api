@extends('layouts.app')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://source.unsplash.com/1920x600/?nature" style="width:100%; height:65vh;" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nature</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1920x600/?restaurant"  style="width:100%; height:65vh;" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Restaurant</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1920x600/?computer" style="width:100%; height:65vh;" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Computer</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All the available facilities') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container">
    <h2 class="text-center text-info mt-4">Available facilities</h2>
    <div class="row">
        <div class="col-sm-4">

            <div class="card m-2 " style="width: 20rem;">
                <img class="card-img-top" src="https://source.unsplash.com/350x230/?office" alt="Card image cap">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h4 class="text-info text-center">Luxury Rooms</h4>
                    <p class="card-text">The Super Deluxe Room is a one-room suite with queen-size bed and comfortable
                        seating
                        area. It has a 39-inch flat screen TV and electric fireplace. There is attached neat and clean
                        washroom
                        to every room.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            
            <div class="card m-2" style="width: 20rem;">
                <img class="card-img-top" src="https://source.unsplash.com/350x230/?conference" alt="Card image cap">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h4 class="text-info text-center">Conference Room</h4>
                    <p class="card-text">Conference Room has the capacity to sit around 50 (fifty) people at one place. It has Projector Screen, Fully Air conditioner and very well organise for conducting the administrative meetings, conference etc.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            
            <div class="card m-2" style="width: 20rem;">
                <img class="card-img-top" src="https://source.unsplash.com/350x230/?meeting" alt="Card image cap">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h4 class="text-info text-center">Meeting Room</h4>
                    <p class="card-text">Meeting Room is comapartively small place than conference room. It is used for meetings, official work .The meeting Room is a one-room suite with queen-size bed and comfortable seating area.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection