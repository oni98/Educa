<?php include 'inc/header.php';


$name = $email = $pass = $c_pass =$role="";
if(isset($_POST['submit']))
{
    $name  =  $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $c_pass = $_POST['c_pass'];

    if($pass!=$c_pass)
    {
    $result = "<h3 style='color:red; margin-left:530px; margin-top:55px; font-size:2.5em;'>Hey... <b>$name</b> ...Your password didn't match !!</h3>";
    }
    else 
    { 
    $insertQuery = "INSERT INTO signup(name,email,pass,con_pass,role)  
           VALUES('$name','$email','$pass','$c_pass','user')";
           $re = mysqli_query($connect,$insertQuery);

   if($re)
   {

        echo "<script>alert('Successfully Submited')</script>";
            ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=reg_form.php">

            <?php
   }
   else
   {
      echo "<script>alert('Failed! Try Again')</script>";
            ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=reg_form.php">

            <?php   }
      
    }
}

if(isset($_POST['reset']))
{
    ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=reg_form.php">

        <?php
}


?>

    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1>REGISTER</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->
</div>

<?php  if(isset($result))
{

    echo $result;
}

?>

     <div class="col-12 col-lg-6" ><!-- style="margin-left: 700px;" -->
                <div class="contact-form edit">
                    <h3>Sign Up</h3>
                    <form method="post" action="">
                        <input name="name" type="text" required="" placeholder="Your Name" style="width: 400px; height: 40px;"><p></p>
                        <input name="email" type="email" required="" placeholder="Your Email" style="width: 400px; height: 40px;"><p></p>
                        <input name="pass" type="password" required="" placeholder="Password" style="width: 400px; height: 40px;"><p></p>
                        <input name="c_pass" type="password" required="" placeholder="Confirm Password" style="width: 400px; height: 40px;"><p></p>
                        <input name="submit" type="submit" value="SUBMIT">
                       
                    </form>


    </div><!-- .contact-form -->


     </div><!-- .col -->

<?php include 'inc/footer.php';

?>