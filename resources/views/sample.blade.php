
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet"
        type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet" />
        <link rel="icon" type="image/gif/png" href="./images/ashok.png">


    <title>Government of Arunachal Pradesh -CHMS</title>
    <style>
    .top-header{
        display: flex;
        background-color:white;
        margin-left: auto;
        margin-right:auto;
        width:80%;
        height: 100px;
        /* border:2px solid green; */
    }
    /* img{
        display: block;
    } */
    .logo{
        /* border: 2px solid red; */
        display: flex;
    }
    .logo h4{
        margin-top: 30px;
        margin-left: 10px;
        display: inline;
        /* border: 2px solid brown; */
     
    }
    .logo h5{
        /* border: 2px solid blue; */
        margin-left: 10px;
    }
    .right{
        /* border:2px solid brown; */
        position: absolute;
        right: 20%;
     
    }
    li{
      padding-left: 10px;
    }
    a{
      font-weight: bold;
      color: white;
   
    }
    ul h3{
      position: absolute;
    left: 43px;
    }
   
    #bookNow {
        background-color: blanchedalmond;
    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}
    </style>
  </head>
  <body>
  
  <div class="top-header">
<div class="logo">
  <img  src="./images/ashok.png"  width="20%" alt="">
  <h4>District East Siang<br> Arunachal Pradesh</h4>
  <!-- <h5>Arunachal Pradesh</h5> -->
</div>
 <div class="mid">
 <h1 class="text-info text-center">Circuit House Management System</h1>

 </div>
<div class="right">
  <img src="./images/digital-india.png" width="200px" alt="">
</div>
</div>
<hr><ul class="nav justify-content-center bg-primary">

<li class="nav-item">
<a class="nav-link active" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link active" href="about.php">About Pasighat</a>
</li>
<li class="nav-item">
<a class="nav-link " href="roomSearch.php">Room Availability</a>
</li>
<li class="nav-item">
<a class="nav-link" href="gallery.php">Gallery</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.php">Contact Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="aboutUs.php">About Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="bookingStatus.php">Booking Status</a>
</li>
<li class="nav-item">
<a class="nav-link" href="feedback.php">Feedback</a>
</li>
<li class="nav-item">
<a class="nav-link" href="adminLogin.php">Admin Login</a>
</li>

</ul>
<hr> 
    <div class="container my-4">
        <h3>In-room available facilities</h3>
        <ul>
        <li>Twin, double or single beds</li>
        <li>Air conditioning or fan cooling system</li>
        <li>Satellite Television</li>
        <li>In-room safes (*)or a safe system at reception</li>
        <li>Tea and coffee making facilities</li>
        <li>All rooms have fresh air</li>
        </ul>

        <div class="container my-2">
    <h5><u>Contact Details:</u></h5>
    <p>Owner Name : Manager</p>
    <p>Owner Contact No : 987456130</p>
    </div>
</div>
    <div class="container my-2">
    <img src="./images/hotel1" width="260px" alt="..." class="img-thumbnail">
    <img src="./images/hotel2" width="260px" alt="..." class="img-thumbnail">
    <img src="./images/hotel22" width="260px" alt="..." class="img-thumbnail">
    <img src="./images/hotel4" width="260px" alt="..." class="img-thumbnail">
    </div>
    </div>

    <hr>
<div class="container my-3" id="bookNow">
            <h2 class="text-center">Search Now</h2>
            <form autocomplete="off" action="bookNow.php" method="POST">
                <div class="form-group row">
                    <label for="checkin" class="col-sm-2 col-form-label">Check-in</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="checkin" id="checkin" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Check-out</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="checkout" id="checkout" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Number of Rooms</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="rooms" placeholder="Select Number of Rooms" required>
                            <!-- <option selected disabled></option> -->
                            <option value="1">1</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Number of Adult</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="adults" placehoder="Select Number of Adults" required>
                            <!-- <option selected disabled>Select Number of Adults</option> -->
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <!-- <option value="3">3</option> -->


                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Number of Children</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="children" placeholder="Select Number of Children" required>
                          
                            <option value="0">0</option>
                            <option value="1">1</option>


                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">Checkbox</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" required>
                            <label class="form-check-label" for="gridCheck1">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-info mb-3">Check Availability</button>
                    </div>
                </div>
            </form>

        </div>
  <div class="container-fluid bg-secondary text-light">

    <p class="text-center py-3 mb-0">Copyright &copy; CHMS-Pasighat East Siang District |
        All rights reserved</p>
        <h6 class="text-center mt-0">Email: dio-esg@nic.in | Phone: 22246</h6>
        <img src="./images/nicLogo.png" class="center" alt="">
        <!-- <p class="text-center">NIC East Siang District Center Pasighat</p> -->
</div>    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
        </script>
        <script>
        var start = new Date();
        // set end date to max one year period:
        var end = new Date(new Date().setYear(start.getFullYear() + 1));

        $('#checkin').datepicker({
            startDate: start,
            endDate: end
            // update "toDate" defaults whenever "fromDate" changes
        }).on('changeDate', function() {
            // set the "toDate" start to not be later than "fromDate" ends:
            $('#checkout').datepicker('setStartDate', new Date($(this).val()));
        });

        $('#checkout').datepicker({
            startDate: start,
            endDate: end
            // update "fromDate" defaults whenever "toDate" changes
        }).on('changeDate', function() {
            // set the "fromDate" end to not be later than "toDate" starts:
            $('#checkin').datepicker('setEndDate', new Date($(this).val()));
        });
        </script>
  </body>
</html>