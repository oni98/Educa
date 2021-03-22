<?php include 'inc/header2.php';

if(!($_SESSION['role']=='user'))
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
                            <h1>USER</h1>
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
                        <li>User</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->

<div class="data-table">
     <b>Routines</b><br>
</div>
<br>

<?php 

            $query = "SELECT * FROM routines where year=3 and sem=2";
            $data = mysqli_query($connect, $query);
            $total = mysqli_num_rows($data);
            
  if ($total != 0) 
    {


?>


<div class="update-cancel">
    <form method="post" >

        <table class="table table-striped table-bordered table-hover">
        <tr class="active edit">
            <th>Semester</th>
            <th>Section</th>
            <th>Course Title</th>
            <th>Course Code</th>
            <th>Course Teacher</th>
            <th>Start</th>
            <th>End</th>
            
        </tr>
<?php


$j=0;
    while ($result=mysqli_fetch_assoc($data)) 
    {  $j++;

?>
            <tr>
                <td><?php echo $result["s_name"] ?></td>
                <td><?php echo $result["sec"] ?></td>
                <td><?php echo $result["c_title"] ?></td>
                <td><?php echo $result["c_code"] ?></td>
                <td><?php echo $result["c_teacher"] ?></td>
                <td><?php echo $result["s_time"] ?></td>
                <td><?php echo $result["e_time"] ?></td>
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

?>
<?php include 'inc/footer.php';
?>