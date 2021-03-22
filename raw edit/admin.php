<?php include 'inc/header2.php';

//if(!$_SESSION["email"])
if(!$_SESSION['email'])
{
    header('location:login.php');
}



?>

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
                        <li>admin</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->
<div style="height: 200px;">
    <h1 style="margin-left: 150px; margin-top: 200px; font-size: 5.5em; color: red;">  Under Construction !!</h1>
</div>
      

<?php include 'inc/footer.php';
?>