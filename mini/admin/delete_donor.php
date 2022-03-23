<?php 
session_start();
 $connection = mysqli_connect("localhost", "root", "", "dbms");

 if(!$connection){
 	die("Connection failed:".mysqli_connect_error());
 }

$id = $_GET['id'];
$delb = mysqli_query($connection,"DELETE FROM blood_bank WHERE Bank_Id='$id'");
$delr = mysqli_query($connection,"DELETE FROM recipient WHERE email='$id'");
$deld = mysqli_query($connection,"DELETE FROM register WHERE email='$id'");

if($delr || $delb || $deld){
				$_SESSION['status']="Deleted Successfully";
				$_SESSION['status_des']="Your imaginary file has been deleted!";
				$_SESSION['status_code']="success";
				header('Location: admin_display.php');;
}
else{
	echo "<script> alert('Delete unsuccessfull');
		             window.location.href='admin_display.php';</script>";
}

?>