<?php
session_start();
if(isset($_POST['register']))
{
	$name = $_POST['Username'];
	$gen = $_POST['gender'];
	$date = $_POST['Dob'];
	$bloodgroup = $_POST['Bloodgroup'];
	$area = $_POST['Area'];
	$cityname = $_POST['Cityname'];
	$pincode = $_POST['Pincode'];
	$mobnumber = $_POST['mobnumber'];
	$email = $_POST['Email'];
	$pass = $_POST['Userpwd'];

	if(isset($_POST['Username']) && isset($_POST['gender']) && isset($_POST['Dob']) && isset($_POST['Bloodgroup']) && isset($_POST['Area']) && isset($_POST['Cityname']) &&isset($_POST['Pincode'])
	 && isset($_POST['mobnumber']) && isset($_POST['Email']) && isset( $_POST['Userpwd']) && isset( $_POST['check'])) {

			$connection = mysqli_connect("localhost", "root", "", "dbms");
			

			$exist = mysqli_query($connection,"SELECT * FROM register WHERE email='$email'");

			if(mysqli_num_rows($exist)){
				$_SESSION['status']="User Exist";
				$_SESSION['status_des']="Already a member!💕";
				$_SESSION['status_code']="warning";
				header('Location: index.php');
			}

			else{
				$Checking = mysqli_query($connection,"SELECT `Blood_Id` FROM inventory WHERE `Group` = '$bloodgroup'");
				$brow = mysqli_fetch_assoc($Checking);


				$query = "INSERT INTO register(Name,gender,dob,bloodgroup,area,city,pincode,mobno,email,password,Blood_Id) VALUES ('".$name."', '".$gen."', '".$date."', '".$bloodgroup."', '".$area."', '".$cityname."', '".$pincode."', '".$mobnumber."', '".$email."', '".$pass."','".$brow['Blood_Id']."')";

	        $result = mysqli_query($connection, $query);
	        if ($result) {
		            $_SESSION['status']="Registered Successfully";
								$_SESSION['status_des']="You are now a member!💕";
								$_SESSION['status_code']="success";
								header('Location: index.php');
	        } else {
						$_SESSION['status']="Registered Failed";
						$_SESSION['status_des']="Oops someething wrong!🤷‍♂️";
						$_SESSION['status_code']="error";
						header('Location: index.php');
		        }
			}
	    } 
	else
	{
		$_SESSION['status']="Form Empty";
		$_SESSION['status_code']="error";
		header('Location: register.php');
	}
}
?>
