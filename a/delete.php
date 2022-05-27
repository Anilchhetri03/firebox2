<?php
session_start();
require('secure_admin.php');
?>
<?php include('inc/header.php');
include('connection/config.php');?>
		
		<!-------------------------sidebar------------>
<?php include('inc/sidebar.php');?>
		     <!-- Sidebar  -->
        
		
		<!--------page-content---------------->
		
		
		   
		   <!--top--navbar----design--------->
<?php include('inc/top-header.php');?>		   
		   
		   <!--------main-content------------->
			
       <?php
if(isset($_GET['id'])) {
  $id=$_GET['id'];
        
  $query="DELETE FROM users WHERE id='$id'";
  $result=mysqli_query($con,$query);

  if($result)
  {
    ?>
    <meta http-equiv = "refresh" content = " 0 ; url = table.php"/>
    <?php
  }
  else
  {
    ?>
    <meta http-equiv = "refresh" content = " 0 ; url = table.php"/>
    <?php
  }
}

 ?>   
		   
			 
			 <!---footer---->
<?php include('inc/footer.php');?>			 
			 
