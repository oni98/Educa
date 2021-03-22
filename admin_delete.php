<?php

	$connect = mysqli_connect("localhost", "root", "", "educa");

session_start();

if(!$_SESSION['email'])
{
    header('location:login.php');
}

error_reporting(0);
	
	$i=0;
	$email = $_GET['email'];
	$pass = $_GET['pass'];
	$updateQuery = "UPDATE signup SET role = 'user' WHERE email = '$email' and pass = '$pass'";
	$data = mysqli_query($connect, $updateQuery);
	if($data)
	{
		echo "<script>alert('Admin Removed')</script>";
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=show_admin.php">

		<?php
	}
	else
	{
		echo "failed";
	}

 ?>