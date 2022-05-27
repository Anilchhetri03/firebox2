<?php
session_start();
if(isset($_SESSION['email']))
{

}
else 
{
    echo header("Location: ../index.php?msg=error");
}
?>
<?php include('../inc/header.php');
include('../connection/config.php');?>
		
		<!-------------------------sidebar------------>
<?php include('../inc/sidebar.php');?>
		     <!-- Sidebar  -->
        
		
		<!--------page-content---------------->
		
		
		   
		   <!--top--navbar----design--------->
<?php include('../inc/top-header.php');?>		   
		   
		   <!--------main-content------------->
           <?php

include('../connection/config.php');
$id = $_GET['id'];


$q = "SELECT * FROM chef WHERE id='$id'";
$r = mysqli_query($con, $q) or die(mysqli_error($con));

$row = $r->fetch_assoc();


$query = "DELETE FROM chef WHERE id='$id'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
if ($result) {
    ?>
    <meta http-equiv = "refresh" content = " 0 ; url = manage.php"/>
    <?php
  }
  else
  {
    ?>
    <meta http-equiv = "refresh" content = " 0 ; url = manage.php"/>
    <?php
  }

 ?>
			 <!---footer---->
<?php include('../inc/footer.php');?>			 
	