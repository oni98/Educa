<?php 

//if($_SESSION["email"]==true)
if($_SESSION['role']=="s_admin")
{
	//header('location:admin.php');
	//echo "welcome"." ".$_SESSION["email"];
	echo "<script>window.location.href= 'index.php'; </script>";
}
elseif($_SESSION['role']=="admin")
{
	//header('location:admin.php');
	//echo "welcome"." ".$_SESSION["email"];
	echo "<script>window.location.href= 'admin.php'; </script>";
}

else
{
	//header('location:login.php');
	echo "<script>window.location.href= 'login.php'; </script>";
}


?>