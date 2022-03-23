<?php
if(isset($_POST['submit'])){

	$name = $_POST['usermail'];
	$pwd = $_POST['userpwd'];

if(isset($_POST['usermail']) && isset($_POST['userpwd']) && isset($_POST['submit'])){

	$connection = mysqli_connect("localhost","root","","dbms");

	$query = "SELECT name,password FROM admin WHERE name='$name'  AND password = '$pwd'";
	$result = mysqli_query($connection,$query);
	$row = mysqli_fetch_assoc($result);

	// $a=$row['name'];
	// $b=$row['password'];

		if(($row['name'] == $name) && ( $row['password'] == $pwd)){
		echo" <script>

			window.location.href='admin_display.php';
			  </script>";
	}
	//  if(($row['name'] == $name) && ( $row['password']!= $pwd)){
	// 		echo" <script>
	//
	// 		alert('Password  not correct');
	//
	// 		  </script>";
	// 		  $row=free_row();
	// }
	else{
		echo" <script>

			alert('User does not exist');
			 window.location.href='Admin_login.php';
			  </script>";
	}



}

}

?>
