<?php
session_start();
if(isset($_POST['submit']))
{
	$Cityname = $_POST['Cityname'];
	$Bloodgroup= $_POST['Bloodgroup'];
	$units = $_POST['units'];
	$Reason= $_POST['Reason'];
	$Date= $_POST['Date'];
	$Hospital= $_POST['Hospital'];
	$Patientname = $_POST['Patientname'];
	$patientAge = $_POST['patientAge'];
	$gender= $_POST['gender'];
	$Requestorname= $_POST['Requestorname'];
	$mobnumber =$_POST['mobnumber'];
	$Email =$_POST['Email'];


	if(isset($_POST['Cityname']) && isset($_POST['Bloodgroup']) && isset($_POST['units']) && isset($_POST['Reason']) && isset($_POST['Date']) && isset($_POST['Hospital']) && isset($_POST['Patientname']) && isset($_POST['patientAge']) && isset($_POST['gender']) && isset( $_POST['Requestorname']) && isset($_POST['mobnumber']) && isset($_POST['Email'])&& isset($_POST['check'])) {


	        $connection = mysqli_connect("localhost", "root", "", "dbms");
	        /*if($con)
	        {
	            echo "connected";
	        }*/
	        $query0 = "SELECT * FROM recipient WHERE mobile = '$mobnumber'";
	        $result0 = mysqli_query($connection, $query0);
	        $rs0=mysqli_num_rows($result0);
	        if ($rs0){
				$_SESSION['status']="Already posted";
				$_SESSION['status_des']="Your requirement already posted!💕";
				$_SESSION['status_code']="success";
				header('Location: findblood.php');


			}
			else{
				$Checking = mysqli_query($connection,"SELECT `Blood_Id` FROM inventory WHERE `Group` = '$Bloodgroup'");
				$brow = mysqli_fetch_assoc($Checking);

	        $query = "INSERT INTO recipient(city,	blood_grp,	no_units,	reason,	required_date,	hos_name,	patient_name,	patient_age,	gender,	req_name,	mobile,	email,Blood_Id) values ('".$Cityname."', '".$Bloodgroup."', '".$units."', '".$Reason."', '".$Date."', '".$Hospital."', '".$Patientname."', '".$patientAge."', '".$gender."', '".$Requestorname."', '".$mobnumber."', '".$Email."','".$brow['Blood_Id']."')";

            $result = mysqli_query($connection, $query);
			
			$query2 = "CALL `getInventory`('$Bloodgroup') ";
			$result2 = mysqli_query($connection, $query2);
		   
		   if (mysqli_num_rows($result2)) {
				 
			$_SESSION['status']="In Stock";
			$_SESSION['status_des']="Your requested blood is available with us please collect💕";
			$_SESSION['status_code']="success";
			header('Location: findblood.php');
				   

		   } else {
			$_SESSION['Cityname']=$Cityname;
			$_SESSION['bloodgroup']=$Bloodgroup;
			   header('Location: display.php');
			   }
	   } 
   }
	         
}


?>
