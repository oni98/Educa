<?php

$connect = mysqli_connect("localhost", "root", "", "educa");

session_start();

if(!($_SESSION['role']=='s_admin'))
{
    header('location:login.php');
}

error_reporting(0);

$updatemsg = "";

if (isset($_POST['update'])) {


    $role = $_POST['role'];
    $i=0;//// here $i for getting array value;
$query = "SELECT * FROM signup order by id asc";
$data = mysqli_query($connect, $query);

while($res = mysqli_fetch_assoc($data))
{
    $id = $res['id'];
    $updateQuery = "UPDATE signup SET role = '$role[$i]' WHERE id = '$id'";
    mysqli_query($connect, $updateQuery);
    $i++;
}

        echo "<script>alert('Data Updated')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=s_admin.php">

        <?php

    

//$updatemsg = "Successfully Updated!!";
}

elseif (isset($_POST['cancel'])) {

        echo "<script>window.location.href= 's_admin.php'; </script>";
}

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
                                    <li class="current-menu-item"><a href="s_admin.php">Home</a></li>
                                   <li><a href="show_admin.php">Admins</a></li>
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
                            <h1>SUPER ADMIN</h1>
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
                        <li>Super Admin</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->


<div class="data-table">
     <b>Data Table</b><br>
</div>

<?php 

if(!empty($updatemsg)){
    echo "<h3  style='color:green;text-align:center'>".$updatemsg."</h3>";
}
?>
<br>


<div class="update-cancel">
    <form method="post" >

        <table class="table table-striped table-bordered table-hover">
        <tr class="active edit">
            <th>S.L</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th style="text-align: center;" colspan="2">Operations</th>
            
        </tr>
<?php

            $query = "SELECT * FROM signup order by name asc";
            $data = mysqli_query($connect, $query);
            $total = mysqli_num_rows($data);
            $j=0;
  if ($total != 0) 
    {

    while ($result=mysqli_fetch_assoc($data)) 
    {  $j++;

?>
            <tr>
                <td><?= $j ?></td>
                <td><?php echo $result["name"] ?></td>
                <td><?php echo $result["email"] ?></td>
                <td><?php echo $result["pass"] ?></td>
                <td><?php echo $result["role"] ?></td>
                <td>
                    <select name="role[]">
                        
                        <!-- <option <?php  //if($result['role']=="") echo "selected" ?>  value="0">
                            Select Role
                        </option> -->
                          <option <?php if($result['role']=="user") echo "selected" ?>  value="user">
                           User
                        </option> 
                          <option <?php if($result['role']=="admin") echo "selected" ?>  value="admin">
                            Admin
                        </option>
                          <option <?php if($result['role']=="s_admin") echo "selected" ?>  value="s_admin">
                          Super Admin
                        </option>
                                                        
                    </select>
                </td>
            <?php echo"
                <td><a href='delete.php?email=$result[email]&pass=$result[pass]' onclick='return checkdelete()'>Delete</a></td>" 
            ?>
            </tr>

<?php
    } 

    }
    else
    {
        echo "No record Found";
    }

?>
        
        </table>

            <div class="update-cancel-btn">
                <input name="update" type="submit" value="UPDATE">  
                <input name="cancel" type="submit" value="Cancel" id="cancel"> 
            </div>   

    </form>
</div>
        <br>
        <br>
            
<script>
    function checkdelete()
    {
        return confirm('Are you sure to delete?');
    }
</script>

<?php include 'inc/footer.php';
?>