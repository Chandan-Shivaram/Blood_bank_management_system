<?php
session_start();
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$area = $_POST['area'];
	$city = $_POST['Cityname'];
	$pincode = $_POST['pincode'];

	if(isset($_POST['name']) && isset($_POST['area']) && isset($_POST['Cityname']) && isset($_POST['pincode'])) {

			$connection = mysqli_connect("localhost", "root", "", "dbms");
			

			$exist = mysqli_query($connection,"SELECT * FROM blood_bank WHERE Bank_Name='$name'");
            
			if(mysqli_num_rows($exist)){
				$_SESSION['status']="Bank Exist";
				$_SESSION['status_des']="Already name of this bank present!💕";
				$_SESSION['status_code']="warning";
				header('Location: admin_display.php');
			}

			else{
				$query = "INSERT INTO blood_bank(Bank_Name, Area, City, Pincode) VALUES ('".$name."', '".$area."', '".$city."', '".$pincode."')";

	        $result = mysqli_query($connection, $query);
	        if ($result) {
		            $_SESSION['status']="Added Successfully";
								$_SESSION['status_des']="You added new Bank!💕";
								$_SESSION['status_code']="success";
								header('Location: admin_display.php');
	        } else {
						$_SESSION['status']="Addition Failed";
						$_SESSION['status_des']="Oops someething wrong!🤷‍♂️";
						$_SESSION['status_code']="error";
						header('Location: admin_display.php');
		        }
			}
	    } 
	else
	{
		$_SESSION['status']="Form Empty";
		$_SESSION['status_code']="error";
		header('Location: admin_display.php');
	}
}


if(isset($_POST['Insubmit']))
{
	$grp = $_POST['grp'];
	$units = $_POST['unit'];

	if(isset($_POST['grp']) && isset($_POST['unit'])) {

			$connection = mysqli_connect("localhost", "root", "", "dbms");
			

			$exist = mysqli_query($connection,"SELECT * FROM inventory WHERE `Group`='$grp'");
            
			if(mysqli_num_rows($exist)){
				$_SESSION['status']="Group Exist";
				$_SESSION['status_des']="Already this Blood group present!💕";
				$_SESSION['status_code']="warning";
				header('Location: admin_display.php');
			}

			else{
				

	        $result1 = mysqli_query($connection, "INSERT INTO `inventory`( `Group`, `Units`) VALUES ('$grp',$units)");
	        if ($result1) {
		            			$_SESSION['status']="Added Successfully";
								$_SESSION['status_des']="You added new Blood group!💕";
								$_SESSION['status_code']="success";
								header('Location: admin_display.php');
	        } else {
						$_SESSION['status']="Addition Failed";
						$_SESSION['status_des']="Oops someething wrong!🤷‍♂️";
						$_SESSION['status_code']="error";
						header('Location: admin_display.php');
		        }
			}
	    } 
	else
	{
		$_SESSION['status']="Form Empty";
		$_SESSION['status_code']="error";
		header('Location: admin_display.php');
	}
}
?>
