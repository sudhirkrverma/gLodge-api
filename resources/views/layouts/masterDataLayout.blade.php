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


    <!-- BootStrap CSS  -->
    <!-- <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/datepicker.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('/css/dataTables.bootstrap.css') }}" rel="stylesheet"> -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >    -->

   

    <!-- Add Custom Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
    
    <style>
       

        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

      
        /* table properties */
        
        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #7386D5;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #6d7fcc;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article,
        a.article:hover {
            background: #6d7fcc !important;
            color: #fff !important;
        }

        /* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
        }

        /* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.active {
                margin-left: 0;
            }

            #sidebarCollapse span {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div id="app">
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

                        <li class="nav-item"><a href="/superadmin/home" class="nav-link text-light ml-2">Home</a></li>
                        <li class="nav-item"><a href="/superadmin/onboarding"
                                class="nav-link text-light ml-2">Onboarding</a></li>
                        @elseif( Auth::user()->role=='admin')

                        <li class="nav-item"><a href="/admin/home" class="nav-link text-light ml-2">Home</a></li>
                        <li class="nav-item"><a href="/admin/bookingHistory" class="nav-link text-light ml-2">Booking
                                History</a></li>
                        <li class="nav-item"><a href="/admin/masterData" class="nav-link text-light ml-2">Master
                                Data</a></li>
                        <li class="nav-item"><a href="/admin/updateProfileRedirect"
                                class="nav-link text-light ml-2">Update Profile</a></li>
                        @elseif(Auth::user()->role=='user')

                        <li class="nav-item"><a href="home" class="nav-link text-light mr-2">Home</a></li>
                        <li class="nav-item"><a href="about" class="nav-link text-light mr-2">About Pasighat</a></li>
                        <li class="nav-item"><a href="roomSearch" class="nav-link text-light mr-2">Room Availability
                            </a></li>
                        <li class="nav-item"><a href="gallery" class="nav-link text-light mr-2">Gallery </a></li>
                        <li class="nav-item"><a href="aboutUs" class="nav-link text-light mr-2">About Us</a></li>
                        <li class="nav-item"><a href="myBookings" class="nav-link text-light mr-2">My Bookings</a></li>
                        <li class="nav-item"><a href="feedback" class="nav-link text-light mr-2">Feedback</a></li>
                        <li class="nav-item"><a href="contact" class="nav-link text-light mr-2">Contact Us</a></li>
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
    </div>
    <div class="container-fluid">
        <div class="wrapper">

            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="font-weight-bold"><a href="/admin/masterData">Dashboard</a></h3>
                </div>
    
                <ul class="list-unstyled components">
                   
                    <p> <a href="/admin/masterData">Admin Panel</a></p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">G-Lodge
                            Details</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <!-- <li>
                                <a href="add_gLodge.php">Add Lodge Name</a>
                            </li> -->
                            <li>
                                <a href="/admin/masterData/lodge/addLodgeFacilities">Add Lodge Facilities</a>
                            </li>
                            <li>
                                <a href="/admin/masterData/lodge/removeLodgeFacilities">Remove Lodge Facilities</a>
                            </li>
                            <li>
                                <a href="/admin/masterData/lodge/changeLodgeFacilities">Change Lodge Facilities Status</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Room
                            Category</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu1">
                            <li>
                                <a href="/admin/masterData/roomCategory/addRoomCategories">Add Room Categories</a>
                            </li>
                            
                            <li>
                                <a href="/admin/masterData/roomCategory/updateRoomCategories">Update Room Categories</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Room
                            Facilties</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu2">
                            <li>
                                <a href="/admin/masterData/roomFacility/addRoomFacilities">Add/Update Room Facilities</a>
                            </li>
                           
    
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Rooms</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu3">
                            <li>
                                <a href="/admin/masterData/room/addRoom">Add Room </a>
                            </li>
                            <li>
                                <a href="/admin/masterData/room/deleteRoom">Delete Room </a>
                            </li>
                            <li>
                                <a href="/admin/masterData/room/updateRoom">Change Room Status</a>
                            </li>
    
                        </ul>
                    </li>
    
    
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
    
                <ul class="list-unstyled CTAs">
                    <li>
                        <!-- <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a> -->
                        <a href="#" class="download">Download source</a>
                    </li>
                    <li>
                        <a href="#" class="article">Back to article</a>
                        <!-- <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a> -->
                    </li>
                </ul>
            </nav>
            <div id="content">
    
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
    
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <span>Toggle Sidebar</span>
                        </button>
    
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>
    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Change Password</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">SignUp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Feedback</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Faq</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav> <!-- content -->
                
                @yield('content')
            </div>
        </div>
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

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <script type="text/javascript">
          $(document).ready(function () {
              $('#sidebarCollapse').on('click', function () {
                  $('#sidebar').toggleClass('active');
              });
          });
      </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->

   
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
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