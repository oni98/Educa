<?php include 'inc/header.php';

if(isset($_POST['submit']))
{

        $email     = $_POST['email'];
        $pass      = $_POST['pass'];

        $s_admin   = "s_admin";
        $admin     = "admin";
        $user      = "user";

        //$_SESSION["email"]=$email;
        $_SESSION["s_admin"]=$s_admin;
        $_SESSION["admin"]=$admin;
        $_SESSION["user"]=$user;

        $Query_s_admin= "SELECT * FROM signup where email = '$email' and pass = '$pass' and role = '$s_admin'";
        $result_s_admin = mysqli_query($connect,$Query_s_admin);

        $Query_admin= "SELECT * FROM signup where email = '$email' and pass = '$pass' and role = '$admin'";
        $result_admin = mysqli_query($connect,$Query_admin);

        $Query_user= "SELECT * FROM signup where email = '$email' and pass = '$pass' and role = '$user'";
        $result_user = mysqli_query($connect,$Query_user);

        if(mysqli_num_rows($result_s_admin)>0)
        {

                echo "<script>window.location.href= 'session.php'; </script>";
            //$result = "<h2 style='color:black; margin-left: 600px;'>Password Matched.</h2>";
            //header('location:session.php');
        }
        elseif(mysqli_num_rows($result_admin)>0)
        {

                echo "<script>window.location.href= 'session.php'; </script>";
            //$result = "<h2 style='color:black; margin-left: 600px;'>Password Matched.</h2>";
            //header('location:session.php');
        }
        elseif(mysqli_num_rows($result_user)>0)
        {

                echo "<script>window.location.href= 'about.php'; </script>";
            //$result = "<h2 style='color:black; margin-left: 600px;'>Password Matched.</h2>";
            //header('location:session.php');
        }
        else 
        {
            $result1 = "<h3 style='color:darkred; margin-left:570px; margin-top:50px; font-size:3.0em;'>Username or Password didn't match...</h3>";
            $result2 = "<h5 style='color:red; margin-left:757px; margin-top:50px; font-size:2.0em;'>Refresh and Try Again.</h5>";      
        }
}

?>

    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1>LOG IN</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->
</div>

<?php  if(isset($result))
{

    echo $result1;
    echo $result2;
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