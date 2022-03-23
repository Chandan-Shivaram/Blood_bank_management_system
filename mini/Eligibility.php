<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Life saver</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/styles.css">
    <!-- bootstrapcdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- logo -->
    <script src="https://kit.fontawesome.com/2f32eb1a6a.js" crossorigin="anonymous"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" href="css/elig.css?v=<?php echo time();?>">
  </head>
  <body style="padding-bottom: 0;">

    <div class="container-fluid cin">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href=""><img class="logo_img" src="images/logo 2.png" alt="logo image"></a>
              <h2 class="navbar-brand mbvlogo" style="font-size:30px;">Life Saver</h2>
              <button class="navbar-toggler " data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a class="nav-link nv" href="#about">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nv" href="findblood.php">Find blood</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nv" data-toggle="modal" data-target="#livefeedm">Live feed</a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link in" href="signui.php">sign in</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link up" href="register.php">Register</a>
                </ul>
              </div>
            </nav>
    </div>

      <div class="container list">
        <h2 class="bde">Blood Donors Eligibility</h2>
        <ul>
          <p>You should not be suffering from any of the following diseases or taking medicines for them</p>
          <li>Hepatitis B, C </li>
          <li>AIDS # Diabetes (are you under medication currently?) </li>
          <li>Fits/ Convulsions (are you under medication currently?) </li>
          <li>Cancer # Leprosy or any other infectious diseases </li>
          <li>Any allergies (Only if you are suffering from severe symptoms) </li>
          <li>Hemophilia/ Bleeding problems</li>
          <li>Kidney disease, Heart disease, Hormonal disorders</li>
          <li> Any other type of Jaundice (within 5 years)Any other type of Jaundice (within 5 years)</li>
          <li> Tuberculosis (within 2 years)</li>
          <li> Chicken Pox/ Malaria/ organ transplant (within 1 year)</li>
          <li> Blood Transfusion / Pregnancy (within the last 6 months)</li>
          <li> Blood Donation/ Major surgery (within the last 3 months)</li>
        </ul>
        <h2 class="bh">Life Saver</h2>
      </div>

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
