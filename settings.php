<?php

$connect = mysqli_connect("localhost", "root", "", "educa");

session_start();

if(!($_SESSION['role']== ('s_admin' || 'admin')))
{
    header('location:login.php');
}

error_reporting(0);

$s_name = $dept = $year = $sem = $sec = $c_title = $c_code = $c_teacher = $s_time = $e_time ="";
if(isset($_POST['submit']))
{
    $s_name  =  $_POST['s_name'];
    $dept = $_POST['dept'];
    $year = $_POST['year'];
    $sem = $_POST['sem'];
    $sec = $_POST['sec'];
    $c_title = $_POST['c_title'];
    $c_code = $_POST['c_code'];
    $c_teacher = $_POST['c_teacher'];
    $s_time = $_POST['s_time'];
    $e_time = $_POST['e_time'];
    $i=0;    

    $insertQuery = "INSERT INTO routines(s_name,dept,year,sem,sec,c_title,c_code,c_teacher,s_time,e_time)  
           VALUES('$s_name','$dept','$year','$sem','$sec','$c_title','$c_code','$c_teacher','$s_time','$e_time')";
           $re = mysqli_query($connect,$insertQuery);

   if($re)
   {
      $result = "<h3 style='color:darkblue; margin-left:530px; margin-top:55px; font-size:2.5em;'>Data have been saved !!</h3>";
   } 
    
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
                                    <li><a href="#">Settings</a></li>
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
                            <h1>Settings</h1>
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
                        <li>Settings</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->


<div class="data-table">
     <b>Input Informations</b><br>
</div>



    <form method="post" >
        <table style="margin-left: 35px; margin-top: -55px;">
            <tr>
                <td>
                <div class="col-12 col-lg-6" ><!-- style="margin-left: 700px;" -->
                <div class="contact-form sem_name">
                    <input name="s_name" type="text" required="" placeholder="Semester name" autocomplete="off" style="width: 200px; height: 40px;">
                </div>
                </div>
                </td>

                <div class="update-cancel">
                <th>
                    <select name="dept">
                        <option>Department</option>
                        <option   value="CSE">
                            CSE
                        </option> 
                        <option   value="EEE">
                            EEE
                        </option>
                        <option   value="CIVIL">
                            CIVIL
                        </option>
                        <option   value="BBA">
                            BBA
                        </option>                            
                    </select>
                </th>

                <th>
                    <select name="year">
                        <option>Year</option>
                        <option   value="1st">
                            1st
                        </option> 
                        <option   value="2nd">
                            2nd
                        </option>
                        <option   value="3rd">
                            3rd
                        </option>
                        <option   value="4th">
                            4th
                        </option>                          
                    </select>
                </th>
                
                <th>
                    <select name="sem">
                        <option>Semester</option>
                        <option value="1st">
                            1st
                        </option> 
                        <option  value="2nd">
                            2nd
                        </option>
                        <option  value="3rd">
                            3rd
                        </option>                         
                    </select>
                </th>
                
                <th>
                    <select name="sec">
                        <option>Section</option>
                        <option  value="A">
                            A
                        </option> 
                        <option value="B">
                            B
                        </option>
                        <option  value="C">
                            C
                        </option>
                        <option  value="D">
                            D
                        </option> 
                        <option  value="E">
                            E
                        </option>                          
                    </select>
                </th>
                </div>
            </tr>

            <tr>
                <td>
                <div class="col-12 col-lg-6" ><!-- style="margin-left: 700px;" -->
                <div class="contact-form sem_name">
                    <input name="c_title" type="text" required="" placeholder="Course Title" autocomplete="off" style="width: 200px; height: 40px;">
                </div>
                </div>
                </td>

                <td>
                <div class="col-12 col-lg-6" ><!-- style="margin-left: 700px;" -->
                <div class="contact-form sem_name">
                    <input name="c_code" type="text" required="" placeholder="Course Code" autocomplete="off" style="width: 200px; height: 40px;">
                </div>
                </div>
                </td>

                <td>
                <div class="col-12 col-lg-6" ><!-- style="margin-left: 700px;" -->
                <div class="contact-form sem_name">
                    <input name="c_teacher" type="text" required="" placeholder="Course Teacher" autocomplete="off" style="width: 200px; height: 40px;">
                </div>
                </div>
                </td>

                <td>
                <div class="col-12 col-lg-6" ><!-- style="margin-left: 700px;" -->
                <div class="contact-form sem_name">
                    <input name="s_time" type="text" required="" placeholder="Start Time" autocomplete="off" style="width: 200px; height: 40px;">
                </div>
                </div>
                </td>

                <td>
                <div class="col-12 col-lg-6" ><!-- style="margin-left: 700px;" -->
                <div class="contact-form sem_name">
                    <input name="e_time" type="text" required="" placeholder="End Time" autocomplete="off" style="width: 200px; height: 40px;">
                </div>
                </div>
                </td>
            </tr>
        </table>
                    <div class="col-12 col-lg-6" ><!-- style="margin-left: 700px;" -->
                        <div class="contact-form submit">
                            <input name="submit" type="submit" value="SUBMIT">
                        </div>
                    </div>
              

                </form>
        
            

<?php include 'inc/footer.php';
?>