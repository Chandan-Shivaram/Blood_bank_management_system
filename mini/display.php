<!DOCTYPE html>

<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Life Saver/Our Heros</title>
  <link rel="stylesheet" href="css/styles.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/2f32eb1a6a.js" crossorigin="anonymous"></script>
  <!-- bootstrapcdn -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- css -->
  <link rel="stylesheet" href="css/display.css?v=<?php echo time();?>">
</head>

<body style="padding-bottom: 0;">
  <section id="display">
  <a href="index.php"><h3 class="cursor: pointer;">Life Saver</h3></a>
  <div class="container dc">


    



  <?php

$con = mysqli_connect("localhost", "root", "", "dbms");

if (!$con) {

  die('Could not connect: ' . mysqli_error($con));
}



include('req_connect.php');

//mysql_select_db("smart", $con);

$a = $_SESSION['Cityname'];
$b = $_SESSION['bloodgroup'];
if (isset($a) && isset($b)) {
  $result1 = mysqli_query($con, "SELECT Name,email,mobno FROM register WHERE city= '$a' AND bloodgroup= '$b' ");
}
if(mysqli_num_rows($result1)){
  echo"<h1 style='padding-left:6%;
   font-weight: bold;
    color: #f56a79;
    line-height: 1.5;'>Details of Blood Donors in your City</h1>";
  echo"<table class='phptble;'>";

      echo"<tr id='head'>

        <th>Name</th>

        <th>Email</th>

        <th>Mobile</th>



      </tr>";
  
while ($row = mysqli_fetch_array($result1)) {

  echo "<tr>";

  echo "<td>" . $row['Name'] . "</td>";

  echo "<td>" . $row['email'] . "</td>";

  echo "<td>" . $row['mobno'] . "</td>";



  echo "</tr>";
}



echo"</table>

<h2 class='bh'>Life Saver</h2>";

echo"<h1 style='margin-right:20%;
text-align:center;
font-weight: bold;
 color: #fff;
 padding-top:3%;
 line-height: 1.5;'>Or</h1>";
}


mysqli_close($con);
?>

<h1>Details of Blood Banks in your City</h1>


<table class="tb">

<tr id="head">

<th>Bank Name</th>

<th>Area</th>

<th>Contact Number</th>



</tr>

<?php

$con = mysqli_connect("localhost","root","","dbms");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error($con));

  }

 
 

//mysql_select_db("smart", $con);

$k=$_SESSION['Cityname'];

if(isset($k)){
$result = mysqli_query($con,"SELECT * FROM blood_bank WHERE City= '$k'");

}
 


if(mysqli_num_rows($result)){

}
 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['Bank_Name'] . "</td>";

  echo "<td>" . $row['Area'] . "</td>";

  echo "<td>" . $row['Contact'] . "</td>";

  

  echo "</tr>";

  }

mysqli_close($con);

?>
</table>
<h2 class="bh">Life Saver</h2>
</div>
  </section>


  <footer id="footer">
    <i class="fab ffab fa-twitter"></i>
    <i class="fab ffab  fa-facebook-f"></i>
    <i class="fab ffab  fa-instagram"></i>
    <i class="fas ffab  fa-envelope"></i>
    <p>© Copyright 2020 Life Saver | Made with 💕 By Team </p>

  </footer>
</body>

</html>
