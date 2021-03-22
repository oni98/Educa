<?php include 'inc/header.php';

//session_start();

if(isset($_POST['submit']))
{

        $email     = $_POST['email'];
        $pass      = $_POST['pass'];

        //$selectQuery = "SELECT * FROM signup where email = '$email' and pass = '$pass'";
        //$result = mysqli_query($connect,$selectQuery);

        $result = mysqli_query($connect,"SELECT * FROM signup where email = '$email' and pass = '$pass'");
        $check = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);

        //if($check>0)
       // {

            
            //$_SESSION['email']=$row['email'];
            //$_SESSION['pass']=$row['pass'];
            //$_SESSION['role']=$row['role'];

            //echo "<script>window.location.href= 'session.php'; </script>";
            //$result = "<h2 style='color:black; margin-left: 600px;'>Password Matched.</h2>";
            //header('location:admin.php');
        //}

            $_SESSION['email']=$row['email'];
            $_SESSION['pass']=$row['pass'];
            $_SESSION['role']=$row['role'];

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
            $result1 = "<h3 style='color:darkred; margin-left:570px; margin-top:50px; font-size:3.0em;'>Username or Password didn't match...</h3>";
            $result = "<h5 style='color:red; margin-left:757px; margin-top:50px; font-size:2.0em;'>Refresh and Try Again.</h5>";      
        }
}

?>

        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1 style="color: white; margin-left: 400px; font-size: 60px;">LOG IN</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->

<?php  if(isset($result))
{

    echo $result1;
    echo $result;
}

?>

     <div class="col-12 col-lg-6" style="margin-left: 700px;">
                <div class="contact-form">
                    <h3>Sign In</h3>

                     <form method="post" action="login.php" >
                        <input name="email" type="email" required="" placeholder="Your Email" style="width: 400px; height: 40px;"><p></p>
                        <input name="pass" type="Password" required="" placeholder="Password" style="width: 400px; height: 40px;"><p></p>
                        <input name="submit" type="submit" value="Log In">
                    </form>
                </div><!-- .contact-form -->
            </div><!-- .col -->



<?php include 'inc/footer.php';
?>