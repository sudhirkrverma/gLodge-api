<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Datatab -->


    <!-- Datatable end here -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet" /> -->
    <!-- add bootstrap css and jquery -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet"
        type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet" /> -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <style>
        .top-header{
            display: flex;
            flex-direction: row;
        }
    </style> -->

</head>

<body>

    <div id="app">
        <div class="container">
            <div class="top-header row ">
                <div class="left mt-2">
                    <!-- Image Logo -->
                    <img src="{{ asset('admin/ashok.png') }}" width="100px" height="120px" style="display: block;
                    margin-left: auto;
                    margin-right: auto;" alt="Image Logo" />
                    <h6 class="text-center font-weight-bold">District East Siang</h6>
                    <h6 class="text-center font-weight-bold">Arunachal Pradesh</h6>
                </div>
                <div class="mid m-4 ">
                    <h1 class="text-center mt-4 text-info font-weight-bold">Government Lodge Managemnent System</h1>
                </div>
                <div class="right ml-4 mr-4 mt-4">

                    <!-- <img src="{{ asset('admin/digital-india.png') }}" width="150px" height="100px" alt="Image Digital India"/> -->
                    <img src="{{ asset('admin/aplogo.png') }}" width="150px" height="100px"  style="display: block;
                    margin-left: auto;
                    margin-right: auto;" alt="Image Digital India" />

                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        @if ( Auth::user()->role=='superadmin')

                        <li class="nav-item"><a href="/glodge/public/superadmin/home" class="nav-link text-light ml-2">Home</a></li>
                        <li class="nav-item"><a href="/glodge/public/superadmin/onboarding"
                                class="nav-link text-light ml-2">Onboarding</a></li>
                        <li class="nav-item"><a href="/glodge/public/superadmin/feedback"
                                class="nav-link text-light ml-2">Feedback</a></li>
                        <li class="nav-item"><a href="/glodge/public/superadmin/queries" class="nav-link text-light ml-2">Queries</a>
                        </li>
                        @elseif( Auth::user()->role=='admin')

                        <li class="nav-item"><a href="/glodge/public/admin/home" class="nav-link text-light ml-2">Home</a></li>
                        <li class="nav-item"><a href="/glodge/public/admin/bookingHistory" class="nav-link text-light ml-2">Booking
                                History</a></li>
                        <li class="nav-item"><a href="/glodge/public/admin/masterData" class="nav-link text-light ml-2">Master
                                Data</a></li>
                        <li class="nav-item"><a href="/glodge/public/admin/updateProfileRedirect"
                                class="nav-link text-light ml-2">Update Profile</a></li>
                        <li class="nav-item"><a href="/glodge/public/admin/feedback" class="nav-link text-light ml-2">Feedback</a>
                        </li>
                        @elseif(Auth::user()->role=='user')

                        <li class="nav-item"><a href="home" class="nav-link text-light mr-2">Home</a></li>
                        <li class="nav-item"><a href="about" class="nav-link text-light mr-2">About District</a></li>
                        <li class="nav-item"><a href="roomSearch" class="nav-link text-light mr-2">Room Availability
                            </a></li>
                        <li class="nav-item"><a href="gallery" class="nav-link text-light mr-2">Tourism </a></li>
                        <li class="nav-item"><a href="aboutUs" class="nav-link text-light mr-2">About Us</a></li>
                        <li class="nav-item"><a href="myBookings" class="nav-link text-light mr-2">My Bookings</a></li>
                        <li class="nav-item"><a href="feedback" class="nav-link text-light mr-2">Feedback <i
                                    class="fa fa-envelope"></i> </a></li>
                        <li class="nav-item"><a href="contact" class="nav-link text-light mr-2">Contact Us <i
                                    class="fa fa-address-book"></i></a></li>
                        @else
                        {{__('invalid')}}
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="container-fluid bg-secondary text-light">

        <p class="text-center py-3 mb-0 font-weight-bold">Copyright © gLodge Managemnent System - Pasighat East Siang
            District- Arunachal
            Pradesh |
            All rights reserved</p>
        <h6 class="text-center mt-0 font-weight-bold">Email: dio-esg@nic.in | Phone: 22246</h6>
        <img src="{{ asset('admin/nicLogo.png')}}"
            style="display:block; width: 8%;  margin-left:auto; margin-right:auto;  " alt="Image" />

    </div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>



    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> -->



    @yield('footer_scripts')



</body>

</html>