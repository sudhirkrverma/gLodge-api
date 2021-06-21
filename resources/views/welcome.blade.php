<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>gLodge</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            /* height: 100vh; */
            margin: 0;
        }

        .full-height {
            /* height: 100vh; */
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
        <img src="{{ asset('admin/ashok.png') }}" width="100px" height="120px" alt="Image Logo"/>
                    <h6 class="text-center font-weight-bold">District East Siang</h6>
                    <h6 class="text-center font-weight-bold">Arunachal Pradesh</h6>
            <div class="title m-b-md">
                <h1 class="font-weight-bold mt-4">Welcome to gLodge Management System</h1>

            </div>
            <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://source.unsplash.com/1920x600/?nature" style="width:100%; height:65vh;"
                            class="d-block " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nature</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://source.unsplash.com/1920x600/?restaurant" style="width:100%; height:65vh;"
                            class="d-block " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Restaurant</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://source.unsplash.com/1920x600/?food" style="width:100%; height:65vh;"
                            class="d-block " alt="...">
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


            <div class="container">
                <h2 class="text-center font-weight-bold text-info mt-4">Available facilities</h2>
                <div class="row">
                    <div class="col-sm-4">

                        <div class="card m-2 " style="width: 20rem;">
                            <img class="card-img-top" src="https://source.unsplash.com/350x230/?office"
                                alt="Card image cap">
                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <h4 class="text-info font-weight-bold text-center">Luxury Rooms</h4>
                                <p class="card-text">The Super Deluxe Room is a one-room suite with queen-size bed and
                                    comfortable
                                    seating
                                    area. It has a 39-inch flat screen TV and electric fireplace. There is attached neat
                                    and clean
                                    washroom
                                    to every room.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <div class="card m-2" style="width: 20rem;">
                            <img class="card-img-top" src="https://source.unsplash.com/350x230/?conference"
                                alt="Card image cap">
                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <h4 class="text-info font-weight-bold text-center">Conference Room</h4>
                                <p class="card-text">Conference Room has the capacity to sit around 50 (fifty) people at
                                    one place. It has Projector Screen, Fully Air conditioner and very well organise for
                                    conducting the administrative meetings, conference etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <div class="card m-2" style="width: 20rem;">
                            <img class="card-img-top" src="https://source.unsplash.com/350x230/?food"
                                alt="Card image cap">
                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <h4 class="text-info font-weight-bold text-center">Food/ Meals</h4>
                                <p class="card-text">The traditional food of India has been widely appreciated for its
                                    fabulous use of herbs and spices. region to region and is largely divided into South
                                    Indian & North Indian cuisine. Here You will get vast variety of food and fruits.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="container-fluid bg-secondary text-light">

        <p class="text-center py-3 mb-0 font-weight-bold">Copyright © gLodge Managemnent System - Pasighat East Siang District- Arunachal
            Pradesh |
            All rights reserved</p>
        <h6 class="text-center mt-0 font-weight-bold">Email: dio-esg@nic.in | Phone: 22246</h6>
        <img src="{{ asset('admin/nicLogo.png')}}"
            style=" display:block;width: 8%;  margin-left:auto; margin-right:auto; align:center;" alt="Image" />
        <!-- <p class="text-center">NIC East Siang District Center Pasighat</p> -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
</body>

</html>