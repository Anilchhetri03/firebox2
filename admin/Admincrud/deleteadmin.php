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
if(isset($_GET['id'])) {
  $id=$_GET['id'];
        
  $query="DELETE FROM add_admin WHERE id='$id'";
  $result=mysqli_query($con,$query);

  if($result)
  {
    ?>
    <meta http-equiv = "refresh" content = " 0 ; url = manageadmin.php"/>
    <?php
  }
  else
  {
    ?>
       <meta http-equiv = "refresh" content = " 0 ; url = manageadmin.php"/>
    <?php
  }
}

 ?>  
		   
			 
			 <!---footer---->
<?php include('../inc/footer.php');?>			 
			 
