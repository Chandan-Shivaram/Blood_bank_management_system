<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Life saver/Register</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="icon" href="images/logo.png">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2f32eb1a6a.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="css/register.css?v=<?php echo time();?>">
</head>

<body style="padding-bottom: 0;">
  <?php include('admin/dbconfig.php') ?>
  <div class="container-fluid cin">
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php"><img class="logo_img"  src="images/logo 2.png" alt="logo image"></a>
      <a href="index.php"><h2 class="navbar-brand mbvlogo" style="font-size:30px;">Life Saver</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link nv" href="">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nv" href="findblood.php">Find blood</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nv" href="">Live feed</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link up" href="signui.php">sign in</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container-fluid rcf">
    <div class="row">
      <div class="col-lg-12 col-sm-12 frow">
        <img src="images/register.png" class="bimage" alt="signup image">
        <h1 class="tleh">A life awaits, be the one to save it! it takes less than a minute...</h1>
        <a href="Eligibility.php">Check Eligibility Before Register</a>
      </div>
      <div class="col-lg-12 col-sm-6">
        <div class="container fcon">
          <form class="regfm" id="f1" action="reg.php" method="post">
            <div class="limg">
              <img src="images/logo.png" class="logoimg" alt="logo">
              <h1 class="rfh1">Register Now</h1>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="ifm">
                  <label>Name</label>
                  <input type="text" class="input-box" name="Username" placeholder="Enter name" autocomplete="on" required>
                </div>
                <div class="ifm">
                  <label class="gfm" style="margin-bottom:2px;">Gender</label>
                  <input type="radio" name="gender" value="male" required>
                  <label class="gfm">male</label>
                  <input type="radio" name="gender" value="female" required>
                  <label class="gfm">female</label>
                  <input type="radio" name="gender" value="other" required>
                  <label class="gfm">other</label>
                </div>
                <div class="ifm">
                  <label>Date of Birth</label>
                  <input type="date" class="input-box" name="Dob" max="12-31-2002" required>
                </div>
                <div class="ifm">
                  <label>Blood Group</label>
                  <select class="Bgrp" class="input-box" name="Bloodgroup" required>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>A1+</option>
                    <option>A1-</option>
                    <option>A2+</option>
                    <option>A2-</option>
                    <option>A1B+</option>
                    <option>A1B-</option>
                    <option>A2B+</option>
                    <option>A2B-</option>

                  </select>
                </div>
                <div class="ifm">
                  <label>Age</label>
                  <input type="number" name="weight" class="input-box" placeholder="Enter age" min="18" max="65" required>
                </div>
                <div class="ifm">
                  <label>Area</label>
                  <input type="text" class="input-box" name="Area" placeholder="Your area" required>
                </div>
              </div>


              <div class="col-lg-6">

                <div class="ifm">
                  <label>City</label>
                  <select class="City" class="input-box" name="Cityname">
                      <option>Bengaluru</option>
                      <option>Mysuru</option>
                      <option>Mangaluru</option>
                  </select>
                </div>

                <div class="ifm">
                  <label>Pincode</label>
                  <input type="text" class="input-box" name="Pincode" placeholder="ex: 5600xx" required>
                </div>

                <div class="ifm">
                  <label>Mobile</label>
                     <input type="text" class="input-box" name="mobnumber" placeholder="Mobile number" required>
                </div>

                <div class="ifm">
                  <label>Email</label>
                    <input type="email" class="input-box" name="Email" placeholder="username@domain.com" required>
                </div>

                <div class="ifm">
                  <label>Password</label>
                  <input type="password" class="input-box" id="p1" name="Userpwd" required>
                </div>

                <div class="ifm">
                  <label>Confirm Password</label>
                  <input type="password" id="p2" class="input-box" name="cUserpwd" required>
                </div>
              </div>
            </div>
            <h6 style="text-align:center; font-weight:bold; font-size:0.8rem;">All the above fields are mandatory</h6>
          </form>
          <p><input type="checkbox" id="ch" name="check" form="f1" class="chb"value="" required>I Agree to terms and conditions.</p>
          <button  type="submit" name="register"  class="bttn" required>Register</button>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script type="text/javascript">
            $("#ch").click(function(){
              if($("#p1").val() != $("#p2").val()){
                setTimeout(function(){
                  $("h6").css("color","#f56a79");
                  $("h6").html("*Password not matched");
                },1000);
                }
            });
            $("button").click(function(){
              if($("#p1").val() != $("#p2").val()){
                setTimeout(function(){
                  $("h6").css("color","#f56a79");
                  $("h6").html("*Password not matched");
                },1000); 
                }
                else{
                  $("button").attr("form","f1");
                }
            });
          </script>
        </div>
      </div>
    </div>

  </div>

  <!-- Footer -->
<footer id="footer">
   <i class="fab ffab fa-twitter"></i>
   <i class="fab ffab  fa-facebook-f"></i>
   <i class="fab ffab  fa-instagram"></i>
   <i class="fas ffab  fa-envelope"></i>
  <p>© Copyright 2020 Life Saver | Made with 💕 By Team</p>
</footer>

<?php include('links.php') ?>
</body>

</html>
