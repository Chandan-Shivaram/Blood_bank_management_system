<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Life saver</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" href="images/logo.png">
  
  
  
  
  
  <!-- CSS only -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/display.css">
  <link rel="stylesheet" href="css/styles.css">
  
  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2f32eb1a6a.js" crossorigin="anonymous"></script>

<body style="padding-bottom: 0; position:relative;">
  <?php include('admin/dbconfig.php') ?>


  


  <section id="title">


    <!-- title -->



          <div class="container-fluid cin" >
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href=""><img class="logo_img" src="images/logo 2.png" alt="logo image"></a>
              <h3 class="navbar-brand mbvlogo">Life Saver</h3>
              <!-- <a class="navbar-brand" href=""><img class="mbvlogo" src="images/logo.png" alt="logo image"></a> -->
             <!-- <h3 class="navbar-brand mbvlogo">Life Saver</h3> -->
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
         
     
  
    
    <div class="container coin">
      <div class="row">
        <div class="col-lg-6">
          <h1>#Be Hero</h1>
          <h1>Donate blood and save life.</h1>
          <p>“Blood Donation will cost you nothing, but it will save a life!”</p>
          <a class="bt" href="#testimonials"><button type="button" href="#testimonials" class="btn btn-outline-dark btn-sm lbutton">Learn more</button></a>
          <a href="Eligibility.php"><button type="button" class="btn btn-dark btn-sm lbutton">Check Eligibility</button></a>
        </div>
        <div class="col-lg-6">
          <img src="images/ttleimg.png" class="title-image" alt="title-image">
        </div>
      </div>
    </div>

  </section>

  <!-- live feed -->
  <section id="livefeed">

    <!-- Modal -->
    <div class="modal fade" id="livefeedm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header d-block">
          <h4  class="text-center" style="margin: 0; padding: 0; font-weight:bold; color: #f56a79;">Latest Posted requirement</h4>
            </button>
          </div>
          <div class="modal-body">
                  <center>
                  <table style="border-radius: 0; border-top-left-radius:20px; border-bottom-right-radius:20px;">

                  <tr id="head">
                  <th>City</th>
                  <th>Bloodgroup</th>
                  <th>Required date</th>
                  <th>Hospital</th>
                  <th>Requestor number</th>
                  
                  
                  </th>
                  <?php
                  // include('req_connect.php');
                $con = mysqli_connect("localhost", "root", "", "dbms");

                



                  $a=$_SESSION['bloodgroup'];
                //mysql_select_db("smart", $con);


                  $result = mysqli_query($con, "SELECT * FROM recipient WHERE blood_grp='$a'");



                while ($row = mysqli_fetch_array($result)) {

                  echo "<tr>";

                  echo "<td>" . $row['city'] . "</td>";

                  echo "<td>" . $row['blood_grp'] . "</td>";

                  echo "<td>" . $row['required_date'] . "</td>";

                  echo "<td>" . $row['hos_name'] . "</td>";

                  echo "<td>" . $row['mobile'] . "</td>";

                  echo "</tr>";
                }





                mysqli_close($con);
                ?>
                </table>
                </center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  
  
  </section>

  <section id="about">
  <div class="container">
    <center><img  src="images/logo.png" alt="logo"></center>
  
  <h1 style="text-align: center; padding-bottom:3%;">About Us</h1>
    <div class="row">
      <div class="col-lg-12">
      <h6>
      The purpose of blood donation website is to provide a platform for patients who are in need of blood during an emergency.
      Several donors across the city register on our website  by donating blood. The donated blood will be stored in our blood inventory and the
      donors can login into our website for editing their info and further volunteering in our future donation camps.</h6>
      <h6>When a requestor requests blood, if the same blood group is in stock in our inventory, they can directly come to our branch and obtain.
      If the requested blood is not in stock in our inventory, we will provide the details of volunteer donors with same blood group and the requestor can call 
      and request the donor to come and donate.Also we will provide the details of other blood banks present in the city if the requested blood is not in stock</h6>

      <h6 style="color: #f56a79;">For further details and queries, contact us at:</h6>

      <h6 style="color: #f56a79;">Email: life_saver@gmail.com</h6>
      <h6 style="color: #f56a79;">Mobile: 080-12345678</h6>
      </h6>
      
      </div>
    </div>
  </div>

  </section>


  <!-- Testimonials -->

  <section id="testimonials">

    <div id="test-car" class="carousel slide" data-ride="carousel" data-pause="hover" data-interval="2000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h3>Donating blood may reduce the risk of heart disease for men and stimulate the generation of red blood cells.</h3>
          <img class="testi-image" src="images/car3.gif" alt="dog-profile">
        </div>
        <div class="carousel-item">
          <h3>The amount of toxic chemicals circulating in the blood stream is reduced by the amount contained in given blood</h3>
          <img class="testi-image" src="images/car2.gif" alt="lady-profile">
        </div>
        <?php $query= mysqli_query($connection,"SELECT * FROM solved_data");
                $num=mysqli_num_rows($query);
      ?>
        <p style="background-color:#f56a79; margin-top:2%;">Total Solved <?php echo $num;?></p>
      </div>
      <a class="carousel-control-prev" href="#test-car" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#test-car" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    $("html").ready()
    $("h1").hide();
    $("p").fadeIn();
    
  </script> -->

  <!-- Footer -->
  <footer id="footer">
    <i class="fab ffab fa-twitter"></i>
    <i class="fab ffab  fa-facebook-f"></i>
    <i class="fab ffab  fa-instagram"></i>
    <i class="fas ffab  fa-envelope"></i>
    <p>© Copyright 2020 Life Saver | Made with 💕 By Team | <a class="admin" href="admin/Admin_login.php">Admin</a> </p>

  </footer>
  <?php include('links.php') ?>
</body>
</html>
