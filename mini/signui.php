<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Life saver/sign-up</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2f32eb1a6a.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css?v=<?php echo time();?>">
</head>

<body>

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
            <a class="nav-link up" href="register.php">Register</a>
        </ul>
      </div>
    </nav>
  </div>

    <div class="container-fluid lcf">
      <div class="row">
        <div class="col-lg-6">
          <img src="images\undraw_Security.svg" class="signinimg" alt="login-img">
        </div>
        <div class="col-lg-6">
          <div class="Sign-in">
            <form class="sign-frm" action="login_connect.php" method="post">
              <img src="images/profile_pic.svg" class="avatar" alt="profile avatar">
              <h1>Sign in</h1>
              <input type="email" class="input-box" name="usermail" placeholder="Your Email" >
              <input type="password" class="input-box" name="userpwd" placeholder="Your Password" >
              <button type="submit" name="submit" class="Submit-btn">Sign in</button>
              <hr>
              <p class="or">OR</p>
              <p>Sign in with</p>
              <a class="fab fabb fa-facebook"></a>
              <a class="fab fabb fa-google-plus"></a>
              <a class="fab fabb fa-twitter-square"></a>
              <p class="sup">Not a member ?<a href="register.php"> register</a></p>

            </form>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
<footer id="footer">
   <i class="fab ffab fa-twitter"></i>
   <i class="fab ffab  fa-facebook-f"></i>
   <i class="fab ffab  fa-instagram"></i>
   <i class="fas ffab  fa-envelope"></i>
  <p>© Copyright 2020 Life Saver | Made with 💕 By Team</p>

</footer>

</body>

</html>
