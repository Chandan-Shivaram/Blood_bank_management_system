<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Life saver/Register</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/2f32eb1a6a.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/register.css?v=<?php echo time();?>">
</head>

<body style="padding-bottom: 0;">

  <div class="container-fluid cin">
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.html"><img class="logo_img"  src="images/logo 2.png" alt="logo image"></a>
      <h2 class="navbar-brand mbvlogo" style="font-size:30px;">Life Saver</h2>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link nv" href="index.php#about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nv" href="findblood.php">Find blood</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nv" href="index.php#livefeed">Live feed</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link up" href="index.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <?php include('login_connect.php')?>
  <div class="container-fluid rcf">
    <div class="row">
      <div class="col-lg-12">
        <div class="container">
          <form class="regfm" action="donor_edit_connect.php" id="f1" method="post" style="width: 80%;">
            <div class="limg">
              <img src="images/logo.png" class="logoimg" alt="logo">
              <h1>Edit Info</h1>
            </div>
            <input class="dv" type="hidden" name="email" value="<?php echo $_SESSION['Email'];?>">
            <div class="row">
              <div class="col-lg-6">
                <div class="ifm">
                  <label>Name</label>
                  <input type="text" class="input-box" name="Username" placeholder="Enter name"  value="<?php echo $_SESSION['Name'];?>">
                </div>
                
                <div class="ifm">
                  <label>Date of Birth</label>
                  <input type="date" class="input-box" name="Dob" max="12-31-2002" value="<?php echo $_SESSION['dob'];?>">
                </div>
            
                <div class="ifm">
                  <label>Age</label>
                  <input type="number" name="age" class="input-box" placeholder="Enter age" min="18" maxlength="2" max="65">
                </div>
                <div class="ifm">
                  <label>Area</label>
                  <input type="text" class="input-box" name="Area" placeholder="Your area" value="<?php echo $_SESSION['area'];?>">
                </div>
              </div>


              <div class="col-lg-6">

                <div class="ifm">
                  <label>City</label>
                  <select class="City" class="input-box" name="Cityname" value="<?php echo $_SESSION['city'];?>">
                      <option>Bengaluru</option>
                      <option>Mysuru</option>
                      <option>Mangaluru</option>
                  </select>
                </div>

                <div class="ifm">
                  <label>Pincode</label>
                  <input type="text" class="input-box" name="Pincode" placeholder="ex: 5600xx" value="<?php echo $_SESSION['pincode'];?>">
                </div>

                <div class="ifm">
                  <label>Mobile</label>
                     <input type="text" class="input-box" name="mobnumber" placeholder="Mobile number" value="<?php echo $_SESSION['mobno'];?>">
                </div>

                <div class="ifm">
                  <label>New Password</label>
                  <input type="password" class="input-box" id="p1" name="Userpwd" value="<?php echo $_SESSION['npassword'];?>">
                </div>

                <div class="ifm">
                  <label>Confirm Password</label>
                  <input type="password" class="input-box" id="p2" name="cUserpwd" value="<?php echo $_SESSION['cpassword'];?>">
                </div>
              </div>
            </div>
            <h6 style="text-align:center; font-weight:bold; font-size:0.8rem;"></h6>

          </form>
          <p><input type="checkbox" name="check" class="chb" value="" form="f1" required>I Agree to terms and conditions.</p>
          <center><button type="submit" name="register"  class="bttn" style="margin-bottom: 3%; width:80%" required>Edit</button></center>
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
  <?php include('links.php')?>

</footer>
</body>

</html>
