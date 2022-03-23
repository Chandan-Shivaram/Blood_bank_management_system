<!DOCTYPE html>

<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Life Saver/Admin view</title>
<link rel="icon" href="../images/logo.png">

<!-- fonts -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/register.css">
<link rel="stylesheet" href="../css/styles.css">
<link rel="stylesheet" href="../css/display.css">

</head>

<body>
  <?php
  session_start();
  ?>

  <style>
  button{
    border-radius: 5px;
  }

  table,.card{
    background-color: #f5f5f5;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;

    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    /* border-top-right-radius: 10px; */
    overflow: hidden;
    outline: none;
    border: none;
  }
  .card{
    background: #f5f5f5;
  }
  .card:hover{
    transform: scale(1.05);
  }
  .regfm{
    padding: 0;
    margin: 0;
  }
  .container{
    padding: 0;
  }

  .cl{
    padding: 30px;
  }

  h3,h5{
    font-weight: bold;
    color: #f56a79;
  }
  h1{
    text-align: center;
    font-family: 'Ubuntu', sans-serif;
  }

  li{
    font-weight: 600;
  }

  a.cbtn,.abtn{
    font-family: 'Ubuntu', sans-serif;
    color: #fff;
    background-color: #f56a79;
    text-align: center!important;
    /* padding: 10px; */
    border-radius: 15px;
    font-size: 15px;
    border: none;
    outline: 0;
    cursor: pointer;
    font-weight: bold;
  }
  a.cbtn:hover{
    background-color: salmon;
  }
  </style>

  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> -->
  <script type="text/javascript">
 	  function preventBack() { window.history.forward(1); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
 	  </script>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header d-block">
          <h3 class="text-center" style="font-weight: bold;">DONORS LIST</h3>
        </div>
        <div class="modal-body">
            <center>
              <table>
              <tr id="head">

              <th>Name</th>
              <th>Gender</th>
              <th>Date of Birth</th>
              <th>Blood Group</th>
              <th>Area</th>
              <th>City</th>
              <th>Pincode</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Operation</th>



              </tr>





          <?php
          // session_start();

          $con = mysqli_connect("localhost","root","","dbms");

          if (!$con)

            {

            die('Could not connect: ' . mysqli_error($con));

            }








          $result = mysqli_query($con,"SELECT Name,gender,dob,bloodgroup,area,city,pincode,email,mobno FROM register ");

          $num = mysqli_query($con,"SELECT * FROM register;");
          $_SESSION['row'] = mysqli_num_rows($num);



          while($row = mysqli_fetch_array($result))

            {
          ?>
            <tr>
            <td>    <?php echo $row['Name'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['dob'];?></td>
            <td><?php echo $row['bloodgroup'];?></td>
            <td><?php echo $row['area'];?></td>
            <td><?php echo $row['city'];?></td>
            <td><?php echo $row['pincode'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['mobno'];?></td>
            <td><a href="delete_donor.php?id=<?php echo $row['email'];?>"><button class="btn btn-outline-danger btn-sm" >Delete</button></a> </td>
            </tr>
          <?php

            }
          ?>
          </table>



          <?php
          mysqli_close($con);
          ?>
            </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header d-block">
          <h3 class="text-center" style="font-weight: bold;">REQUEST LIST</h3>
        </div>
        <div class="modal-body">
            <center>
              <table>
              <tr id="head">

              <th>City</th>
              <th>Bloodgroup</th>
              <th>Units</th>
              <th>Reason</th>
              <th>Date</th>
              <th>Hospital</th>
              <th>Pname</th>
              <th>Page</th>
              <th>Gender</th>
              <th>Rname</th>
              <th>Mobile</th>
              <th>Email</th>
              <th>Operation</th>


              </tr>





          <?php
          // session_start();

          $con = mysqli_connect("localhost","root","","dbms");

          if (!$con)

            {

            die('Could not connect: ' . mysqli_error($con));

            }








          $result1 = mysqli_query($con,"SELECT city,blood_grp,no_units,reason,required_date,hos_name,patient_name,patient_age,gender,req_name,mobile,email FROM recipient ");

          $num1 = mysqli_query($con,"SELECT * FROM recipient;");
          $_SESSION['row1'] = mysqli_num_rows($num1);



          while($row1 = mysqli_fetch_array($result1))

            {
          ?>
            <tr>
            <td>    <?php echo $row1['city'];?></td>
            <td><?php echo $row1['blood_grp'];?></td>
            <td><?php echo $row1['no_units'];?></td>
            <td><?php echo $row1['reason'];?></td>
            <td><?php echo $row1['required_date'];?></td>
            <td><?php echo $row1['hos_name'];?></td>
            <td><?php echo $row1['patient_name'];?></td>
            <td><?php echo $row1['patient_age'];?></td>
            <td><?php echo $row1['gender'];?></td>
            <td><?php echo $row1['req_name'];?></td>
            <td><?php echo $row1['mobile'];?></td>
            <td><?php echo $row1['email'];?></td>
            <td><a href="delete_donor.php?id=<?php echo $row1['email'];?>"><button class="btn btn-outline-danger btn-sm dl" >Delete</button></a></td>
            </tr>
          <?php

            }
          ?>
          </table>



          <?php
          mysqli_close($con);
          ?>
            </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header d-block">
          <h3 class="text-center" style="font-weight: bold;">Blood Bank List</h3>
        </div>
        <div class="modal-body">
            <center>

            <table>
            <tr id="head">

            <th>Bank Name</th>
            <th>Bank Id</th>
            <th>Area</th>
            <th>City</th>
            <th>Pincode</th>
            <th>Contact</th>
            <th>Operation</th>


            </tr>





        <?php
        // session_start();

        $con = mysqli_connect("localhost","root","","dbms");

        if (!$con)

          {

          die('Could not connect: ' . mysqli_error($con));

          }








        $result2 = mysqli_query($con,"SELECT * FROM blood_bank ");

        $num2 = mysqli_query($con,"SELECT * FROM blood_bank;");
        $_SESSION['row2'] = mysqli_num_rows($num2);



        while($row2 = mysqli_fetch_array($result2))

          {
        ?>
          <tr>
          <td class="start"><?php echo $row2['Bank_Name'];?></td>
          <td><?php echo $row2['Bank_Id'];?></td>
          <td><?php echo $row2['Area'];?></td>
          <td><?php echo $row2['City'];?></td>
          <td><?php echo $row2['Pincode'];?></td>
          <td><?php echo $row2['Contact'];?></td>
          <td><a href="delete_donor.php?id=<?php echo $row2['Bank_Id'];?>"><button class="btn btn-outline-danger btn-sm dl" >Delete</button></a>
          <a ><button class="btn btn-outline-secondary btn-sm edit" >Edit</button></a>
          </td>
          </tr>
        <?php

          }
        ?>
        </table>
        </center>
          


        <?php
        mysqli_close($con);
        ?>
          
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop21">Add</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


    <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop21" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="text-center" id="staticBackdropLabel">Add new Bank</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                  <center>
                  <form class="regfm" id="afm" action="Admin_add.php" method="post">
                      <div class="ifm">
                      <label for="">Bank name</label>
                      <input type="text" class="input-box" name="name" required>
                      </div>
                      <div class="ifm">
                      <label for="">Area</label>
                      <input type="text" class="input-box" name="area" id="" required>
                      </div>
                      <div class="ifm">
                      <label>City</label>
                          <select class="City" class="input-box" name="Cityname">
                              <option>Bengaluru</option>
                              <option>Mysuru</option>
                              <option>Mangaluru</option>
                          </select>
                      </div>
                      <div class="ifm">
                      <label for="">Pincode</label>
                      <input type="text" class="input-box" name="pincode" required>
                      </div>
                      <button type="submit" name="submit" form="afm" style="margin-bottom: 10px; border-radius: 5px; " class="abtn">Add</button>
                  </form>

                  </center>


                  </div>
                </div>
              </div>
            </div>

            <!-- edit -->
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop31" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="text-center" id="staticBackdropLabel">Add new Bank</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                  <center>

                  
                  <form class="regfm" id="afm" action="update.php" method="post">
                      <input type="hidden" name="id" id="id">
                      <div class="ifm">
                      <label for="">Bank name</label>
                      <input type="text" class="input-box" id="name" name="name">
                      </div>
                      <div class="ifm">
                      <label for="">Area</label>
                      <input type="text" class="input-box"  id="area" name="area">
                      </div>
                      <div class="ifm">
                      <label>City</label>
                          <select class="City" class="input-box" id="city"  name="city">
                              <option>Bengaluru</option>
                              <option>Mysuru</option>
                              <option>Mangaluru</option>
                          </select>
                      </div>
                      <div class="ifm">
                      <label for="">Pincode</label>
                      <input type="text" class="input-box" id="pin"  name="pincode">
                      </div>
                      <button type="submit" name="submit"  style="margin-bottom: 10px; border-radius: 5px; " class="abtn">Update</button>
                  </form>

                  </center>


                  </div>
                </div>
              </div>
            </div>


            <!-- INVENTORY -->
            <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header d-block">
                  <h3 class="text-center" style="font-weight: bold;">Blood Inventory</h3>
                </div>
                <div class="modal-body">
                    <center>
                      <table>
                      <tr id="head">

                      <th>ID</th>
                      <th>Bloodgroup</th>
                      <th>Units</th>
                      <th>Operation</th>
                      
                      </tr>





                  <?php
                  // session_start();

                  $con = mysqli_connect("localhost","root","","dbms");

                  if (!$con)

                    {

                    die('Could not connect: ' . mysqli_error($con));

                    }








                  $result3 = "SELECT * FROM inventory";

                  $num3 = mysqli_query($con,$result3);
                  $_SESSION['row3'] = mysqli_num_rows($num3);



                  while($row3 = mysqli_fetch_array($num3))

                    {
                  ?>
                    <tr>
                    <td><?php echo $row3['Blood_Id'];?></td>
                    <td><?php echo $row3['Group'];?></td>
                    <td><?php echo $row3['Units'];?></td>
                    <td><a ><button class="btn btn-outline-secondary btn-sm edit1" >Edit</button></a></td>
                    </tr>
                  <?php

                    }
                  ?>
                  </table>



                  <?php
                  mysqli_close($con);
                  ?>
                    </center>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop41">Add</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
            </div>
          <!-- add blood group -->
          <div class="modal fade" id="staticBackdrop41" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="text-center" id="staticBackdropLabel">Add new Bank</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                  <center>
                  <form class="regfm" id="afm" action="Admin_add.php" method="post">
                      <div class="ifm">
                          <label>Blood Group</label>
                          <select class="Bgrp" class="input-box" name="grp" required>
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
                      <label for="">units</label>
                      <input type="text" class="input-box" name="unit" id="" required>
                      </div>
                      <button type="submit" name="Insubmit"  style="margin-bottom: 10px; border-radius: 5px; " class="abtn">Add</button>
                  </form>
<!-- add blood group -->
                  </center>


                  </div>
                </div>
              </div>
            </div>
            
            <!-- edit Blood -->
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop51" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="text-center" id="staticBackdropLabel">Add new Bank</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                  <center>

                  
                  <form class="regfm" id="afm" action="update.php" method="post">
                      <input type="hidden" name="bid" id="bid">
                      <div class="ifm">
                      <label for="">Units</label>
                      <input type="number" class="input-box" name="units"  id="units" name="area" min="0">
                      </div>
                      <button type="submit" name="Bsubmit"  style="margin-bottom: 10px; border-radius: 5px; " class="abtn">Update</button>
                  </form>

                  </center>


                  </div>
                </div>
              </div>
            </div>


            <center><img  src="../images/logo.png" style="text-align: center; width:5%;"alt="logo image"></center>
            <h1>Admin View</h1>
            <div class="container">

                <div class="row">
                  <div class="col-lg-6 cl">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Donors</h3>
                        <ul>
                          <li>Totally there are <?php echo $_SESSION['row']?> donors.</li>
                          <li>You can Edit or Delete Donor list</li>
                        </ul>
                        <a href="#" class="btn btn-primary cbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Make changes</a>
                      </div>
                    </div>
                  </div>
                <div class="col-lg-6 cl">
                  <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Request</h3>
                        <ul>
                          <li>Totally there are <?php echo $_SESSION['row1']?> Requests.</li>
                          <li>You can Edit or Delete Request list</li>
                        </ul>
                        <a href="#" class="btn btn-primary cbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Make changes</a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6 cl">
                  <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Blood Inventory</h3>
                        <ul>
                          <li>Totally there are <?php echo $_SESSION['row3']?> Groups.</li>
                          <li>You can Add or Edit Blood Groups</li>
                        </ul>
                        <a href="#" class="btn btn-primary cbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">Make changes</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 cl">
                  <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Blood banks</h3>
                        <ul>
                          <li>Totally there are <?php echo $_SESSION['row2']?> Blood banks.</li>
                          <li>You can Edit or Delete Blood bank list</li>
                        </ul>
                        <a href="#" class="btn btn-primary cbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Make changes</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 cl">
                  <a class="btn btn-primary" href="Admin_login.php">Logout</a>
                </div>
              </div>
            </div>


  <footer id="footer">
    <i class="fab ffab fa-twitter"></i>
    <i class="fab ffab  fa-facebook-f"></i>
    <i class="fab ffab  fa-instagram"></i>
    <i class="fas ffab  fa-envelope"></i>
    <p>© Copyright 2020 Life Saver | Made with 💕 By Team</p>

  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
      $(".edit").click(function(){
        $("#staticBackdrop31").modal('show');
        var data=[];
        var i=0;
         $(this).closest("tr").find("td").each(function(){
             data[i]=$(this).text();
              i++;
        });
            $("#name").val(data[0]);
            $("#id").val(data[1]);
            $("#area").val(data[2]);
            $("#city").val(data[3]);
            $("#pin").val(data[4]);
        
      });
  });

  $(document).ready(function(){
      $(".edit1").click(function(){
        $("#staticBackdrop51").modal('show');
        var data1=[];
        var i=0;
         $(this).closest("tr").find("td").each(function(){
             data1[i]=$(this).text();
              i++;
        });
        console.log(data1[2]);
            $("#bid").val(data1[0]);
            $("#units").val(data1[2]);
            
        
      });
  });
  </script>
 


  
<?php include('../links.php') ?>
</body>

</html>
