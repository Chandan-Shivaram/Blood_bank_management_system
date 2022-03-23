<?php
session_start();
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$id = $_POST['id'];
	$area = $_POST['area'];
	$city = $_POST['city'];
	$pin = $_POST['pincode'];
	

	if(isset($_POST['name']) && isset($_POST['id']) && isset($_POST['area']) && isset($_POST['city']) && isset($_POST['pincode'])) {

			$connection = mysqli_connect("localhost", "root", "", "dbms");
			
				$query = "UPDATE blood_bank SET Bank_Name='$name',Area='$area',City='$city',Pincode='$pin' WHERE Bank_Id = '$id'";

	        $result = mysqli_query($connection, $query);
	        if ($result) {
		            $_SESSION['status']="Updated Successfully";
								$_SESSION['status_des']="Your data updated with us!💕";
								$_SESSION['status_code']="success";
								header('Location: admin_display.php');
	        } else {
						$_SESSION['status']="Update Failed";
						$_SESSION['status_des']="Oops someething wrong!🤷‍♂️";
						$_SESSION['status_code']="error";
						header('Location: admin_display.php');
		        }
	}
}
if(isset($_POST['Bsubmit']))
{
	$id = $_POST['bid'];
	$units = $_POST['units'];
	


	if(isset($_POST['bid']) && isset($_POST['units'])) {

			$connection = mysqli_connect("localhost", "root", "", "dbms");
			
				echo"<script>alert('$id');</script>";

	        $result4 = mysqli_query($connection, "UPDATE inventory SET Units='$units' WHERE Blood_Id = '$id'");
	        if ($result4) {
		            $_SESSION['status']="Updated Successfully";
								$_SESSION['status_des']="Units updated!💕";
								$_SESSION['status_code']="success";
								header('Location: admin_display.php');
	        } else {
						$_SESSION['status']="Update Failed";
						$_SESSION['status_des']="Oops something wrong!🤷‍♂️";
						$_SESSION['status_code']="error";
						header('Location: admin_display.php');
		        }
	}
}
?>
