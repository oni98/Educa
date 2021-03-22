<?php

	$connect = mysqli_connect("localhost", "root", "", "educa");

session_start();

if(!$_SESSION['email'])
{
    header('location:login.php');
}

error_reporting(0);

	$email = $_GET['email'];
	$pass = $_GET['pass'];
	$deleteQuery = "DELETE FROM signup where email = '$email' and pass = '$pass'";
	$data = mysqli_query($connect, $deleteQuery);
	if($data)
	{
		echo "<script>alert('Data Deleted')</script>";
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=s_admin.php">

		<?php
	}
	else
	{
		echo "failed";
	}

 ?>