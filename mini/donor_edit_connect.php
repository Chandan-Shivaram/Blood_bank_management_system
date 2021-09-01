<?php
session_start();
if(isset($_POST['register']))
{
	$name = $_POST['Username'];
	$date = $_POST['Dob'];
	$area = $_POST['Area'];
	$cityname = $_POST['Cityname'];
	$pincode = $_POST['Pincode'];
	$mobnumber = $_POST['mobnumber'];
	$pass = $_POST['Userpwd'];
	$cpassword=$_POST['cUserpwd'];
    $email = $_POST['email'];
	if(isset($_POST['Username'])  && isset($_POST['Dob']) && isset($_POST['Area']) && isset($_POST['Cityname']) && isset($_POST['Pincode']) && isset($_POST['mobnumber']) && isset( $_POST['Userpwd']) && isset($_POST['cUserpwd']) && isset($_POST['check'])) {
			
	    if ($pass == $cpassword) {
	        
	        $connection = mysqli_connect("localhost", "root", "", "dbms");
	        /*if($con)
	        {
	            echo "connected";
	        }*/
	        $query = "UPDATE register SET  Name='$name', dob='$date',area='$area',city='$cityname',pincode='$pincode',mobno='$mobnumber',password='$pass' WHERE email='$email' ";

		 	/*if($stmt = $connnection->prepare("INSERT INTO r(username,age,email,password,confirmpassword) VALUES (?,?,?,?,?)") and $count==0){
				$stmt->bind_param('sisss',$username,$age,$email,$password,$confirmpassword);
				$stmt->execute();
				$stmt->close();
			}*/
	        
	        $result = mysqli_query($connection, $query);
	        if ($result) {
				$_SESSION['status']="Update Successfully";
				$_SESSION['status_des']="Your new data is updated!💕";
				$_SESSION['status_code']="success";
				header('Location: donor_edit_display.php');

	        } else {
		            
					$_SESSION['status']="Update failed";
					$_SESSION['status_des']="Oops someething wrong!🤷‍♂️";
					$_SESSION['status_code']="error";
					header('Location: donor_edit_display.php');
		        }
	    } else {
			$_SESSION['status']="wrong password";
			$_SESSION['status_des']=" password not matched!🤷‍♂️";
			$_SESSION['status_code']="warning";
			header('Location: donor_edit_display.php');
	    }
	}
		else
		{
		    $_SESSION['status']="empty";
			$_SESSION['status_des']=" password not matched!🤷‍♂️";
			$_SESSION['status_code']="warning";
			header('Location: donor_edit_display.php');
		}
} 



?>