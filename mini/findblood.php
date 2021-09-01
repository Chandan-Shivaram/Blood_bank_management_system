<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Life saver/Find Blood</title>
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
  <link rel="stylesheet" href="css/register.css?v=<?php echo time();?>">
</head>

<body style="padding-bottom: 0;">

  <?php include('admin/dbconfig.php') ?>
  <div class="container-fluid cin">
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php"><img class="logo_img" src="images/logo 2.png" alt="logo image"></a>
      <h3 class="navbar-brand mbvlogo" style="font-size:30px;">Life Saver</h3>
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
            <a class="nav-link nv" href="#livefeed">Live feed</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link in" href="signui.php">sign in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link up" href="register.php">Register</a>
        </ul>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container-fluid rcf">
    <div class="row">
      <div class="col-lg-12 col-sm-6 frow">
        <img src="images/register.png" class="bimage" alt="signup image">
        <h1 class="tleh">A life awaits, be the one to save it! it takes less than a minute...</h1>
      </div>
      <div class="col-lg-12 col-sm-6">
        <div class="container">
          <form class="regfm" id="f2" action="req_connect.php" method="post">
            <div class="limg">
              <img src="images/logo.png" class="logoimg" alt="logo">
              <h1 class="fbh1">Post Your Requirement</h1>
            </div>
            <div class="row">
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
                  <label>Blood Group</label>
                  <select class="Bgrp" class="input-box" name="Bloodgroup">
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
                  <label>No of Units</label>
                  <select class="units" class="input-box" name="units">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                  </select>
                </div>

                <div class="ifm">
                  <label>Reason for Requirement</label>
                  <select class="Bgrp" class="input-box sfm" name="Reason">
                    <option value="Dengue">Dengue</option>
                    <option value="Jaundice">Jaundice</option>
                    <option value="Cancer Patient">Cancer Patient</option>
                    <option value="Colon Cancer">Colon Cancer</option>
                    <option value="Blood Cancer">Blood Cancer</option>
                    <option value="Angioplasty">Angioplasty</option>
                    <option value="Bone Marrow Transplant">Bone Marrow Transplant</option>
                    <option value="Coronary Artery Bypass Surgery">Coronary Artery Bypass Surgery</option>
                    <option value="Open Heart Surgery">Open Heart Surgery</option>
                    <option value="Mitral Valve Replacement">Mitral Valve Replacement</option>
                    <option value="Burn Injuries">Burn Injuries</option>
                    <option value="Accident">Accident</option>
                    <option value="Sickle Cell">Sickle Cell</option>
                    <option value="Thallesemia">Thallesemia</option>
                    <option value="Pregnancy">Pregnancy</option>
                    <option value="Aortic Valve Replacement">Aortic Valve Replacement</option>
                    <option value="Blood Loss">Blood Loss</option>
                    <option value="Dialysis">Dialysis</option>
                    <option value="Low Platelet Count">Low Platelet Count</option>
                    <option value="Knee Replacement">Knee Replacement</option>
                    <option value="Hip Replacement">Hip Replacement</option>
                    <option value="Bomb blast Victims">Bomb blast Victims</option>
                    <option value="Others">Others</option>

                  </select>
                </div>

                <div class="ifm">
                  <label>Required Before</label>
                  <input type="datetime-local" class="input-box" name="Date" value="" required>
                </div>

                <div class="ifm">
                  <label>Hospital Name</label>
                  <input type="text" class="input-box" name="Hospital" value="" required>
                </div>
              </div>


              <div class="col-lg-6">

                <div class="ifm">
                  <label>Patient Name</label>
                  <input type="text" class="input-box" name="Patientname" value="" required>
                </div>

                <div class="ifm">
                  <label>Patient Age</label>
                  <input type="number" class="input-box" name="patientAge" min="0" required>
                </div>

                <div class="ifm">
                  <label class="gfm" style="margin-right:2px;">Gender</label>
                  <input type="radio" name="gender" value="male">
                  <label class="gfm">male</label>
                  <input type="radio" name="gender" value="female">
                  <label class="gfm">female</label>
                  <input type="radio" name="gender" value="other">
                  <label class="gfm">other</label>
                </div>

                <div class="ifm">
                  <label>Your Name</label>
                  <input type="text" class="input-box" name="Requestorname" value="" required>
                </div>

                <div class="ifm">
                  <label>Mobile</label>
                  <input type="text" class="input-box" name="mobnumber" placeholder="Mobile number" required>
                </div>

                <div class="ifm">
                  <label>Email</label>
                  <input type="email" class="input-box" name="Email" placeholder="username@domain.com" required>
                </div>
              </div>
            </div>
            <h6 style="text-align:center; font-weight:bold; font-size:0.8rem;">All the above fields are mandatory</h6>
          </form>
          <p><input type="checkbox" form="f2" name="check" class="chb" value="">I Agree to terms and conditions.</p>
          <button type="submit" form="f2" name="submit" class="bttn" style="margin-bottom: 3%;">Submit</button>
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
