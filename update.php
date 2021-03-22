<?php

	$connect = mysqli_connect("localhost", "root", "", "educa");

session_start();

if(!$_SESSION['email'])
{
    header('location:login.php');
}

error_reporting(0);


if (isset($_POST['update'])) {

	$email = $_GET['email'];
	$role = $_GET['role'];
	$updateQuery = "UPDATE signup SET role = '$role' WHERE email = '$email'";
	$data = mysqli_query($connect, $updateQuery);
	if($data)
	{
		echo "<script>alert('Data Updated')</script>";
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=s_admin.php">

		<?php
		
	}
	else
	{
		echo "failed";
	}

}
 ?>

<div class="update-cancel">
	<form method="post" action="">
<div class="update-cancel-btn">
                <input name="update" type="submit" value="UPDATE">  
                <input name="cancel" type="submit" value="Cancel" id="cancel"> 
            </div>   

    </form>
</div>

