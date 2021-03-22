<?php

$connect = mysqli_connect("localhost", "root", "", "educa");

session_start();

if(!($_SESSION['role']=='admin'))
{
    header('location:login.php');
}

error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>EduCa</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="hero-content">
        <header class="site-header">
            <div class="nav-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-9 col-lg-3">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="index.php" rel="home">Edu<span>Ca</span></a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                            <nav class="site-navigation flex justify-content-end align-items-center">
                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li class="current-menu-item"><a href="admin.php">Home</a></li>
                                   <li><a href="only_admin.php">Admins</a></li>
                                    <li><a href="routines.php">Routines</a></li>
                                    <li><a href="settings.php">Settings</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                    
                                </ul>

                                <div class="hamburger-menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div><!-- .hamburger-menu -->

                                <div class="header-bar-cart">
                                    <a href="admin.php" class="flex justify-content-center align-items-center"><!-- <span aria-hidden="true" class="icon_bag_alt"> --></span></a>
                                </div><!-- .header-bar-search -->
                            </nav><!-- .site-navigation -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .nav-bar -->
        </header>

    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1>ADMINS</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->
</div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs">
                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li>Only_Admin</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->


<div class="data-table">
     <b>Admins</b><br>
</div>
<br>

<?php 

            $query = "SELECT * FROM signup WHERE role !='user' order by id asc";
            $data = mysqli_query($connect, $query);
            $total = mysqli_num_rows($data);
            
  if ($total != 0) 
    {


?>


<div class="update-cancel">
    <form method="post" >

        <table class="table table-striped table-bordered table-hover">
        <tr class="active edit">
            <th>S.L</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            
        </tr>
<?php


$j=0;
    while ($result=mysqli_fetch_assoc($data)) 
    {  $j++;

?>
            <tr>
                <td><?= $j ?></td>
                <td><?php echo $result["name"] ?></td>
                <td><?php echo $result["email"] ?></td>
                <td><?php echo $result["pass"] ?></td>
                <td><?php echo $result["role"] ?></td>
            </tr>

<?php
    } 

   
?>
        
        </table> 

    </form>
</div>
        <br>
        <br>

<?php 

 }
    else
    {
        echo "No record Found";
    }



include 'inc/footer.php';
?>