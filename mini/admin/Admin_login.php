<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Life saver/sign-up</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2f32eb1a6a.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2f32eb1a6a.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="../css/login.css?v=<?php echo time();?>">
</head>

<body style="padding-bottom: 0;">

  <div class="container-fluid cin">
    <!-- Nav Bar -->
    <h3 class="navbar-brand mbvlogo" href="../index.php" style="text-align: center; padding-left:20%; padding-top:11%;">Life Saver</h3>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="../index.php"><img class="logo_img" src="../images/logo 2.png" alt="logo image"></a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01"> -->

      </div>
    </nav>
  </div>

  <div class="container-fluid lcf">
    <div class="row">
      <div class="col-lg-6">
        <img src="..\images\undraw_Security.svg" class="signinimg" alt="login-img">
      </div>
      <div class="col-lg-6">
        <div class="Sign-in">
          <form class="sign-frm" action="admin_connect.php" method="post">
            <img src="../images/profile_pic.svg" class="avatar" alt="profile avatar">
            <h1>Admin Login</h1>
            <input type="text" class="input-box" name="usermail" placeholder="Your Name" required>
            <input type="password" class="input-box" name="userpwd" placeholder="Your Password" required>
            <button type="submit" name="submit" class="Submit-btn">Login</button>
            <hr>
            <p class="or">OR</p>
            <p>Sign in with</p>
            <a class="fab fabb fa-facebook"></a>
            <a class="fab fabb fa-google-plus"></a>
            <a class="fab fabb fa-twitter-square"></a>

          </form>
        </div>
      </div>
    </div>

  </div>
  </section>

  <!-- Footer -->
  <footer id="footer" >
    <i class="fab ffab fa-twitter"></i>
    <i class="fab ffab  fa-facebook-f"></i>
    <i class="fab ffab  fa-instagram"></i>
    <i class="fas ffab  fa-envelope"></i>
    <p>© Copyright 2020 Life Saver | Made with 💕 By Team</p>

  </footer>

</body>

</html>
