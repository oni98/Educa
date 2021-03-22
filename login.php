<?php include 'inc/header.php';

if(isset($_POST['submit']))
{

        $email     = $_POST['email'];
        $pass      = $_POST['pass'];

        $result = mysqli_query($connect,"SELECT * FROM signup where email = '$email' and pass = '$pass'");
        $check = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);

        $_SESSION['email'] = $row['email'];
        $_SESSION['pass']  = $row['pass'];
        $_SESSION['role']  = $row['role'];

        if($_SESSION['role'] == "s_admin")
        {
            echo "<script>window.location.href= 's_admin.php'; </script>";
        }
        elseif($_SESSION['role'] == "admin")
        {
            echo "<script>window.location.href= 'admin.php'; </script>";
        }
        elseif($_SESSION['role'] == "user")
        {
            echo "<script>window.location.href= '.php'; </script>";
        }
        else 
        {
            $result1 = "<h3 style='color:darkred; margin-left:570px; margin-top:50px; font-size:3.0em;'>Username or Password didn't match...</h3>";
            $result = "<h5 style='color:red; margin-left:757px; margin-top:50px; font-size:2.0em;'>Refresh and Try Again.</h5>";      
        }
}

?>

    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container-fluid">
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
    echo $result;
}

?>

        
            <div class="col-12 col-lg-6">
                <div class="contact-form edit">
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