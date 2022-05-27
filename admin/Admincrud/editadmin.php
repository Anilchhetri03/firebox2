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
         
  <div class="container-fluid  bg-dark">
  
                <?php
                if (isset($_GET['id'])) {
                  $id = $_GET['id'];
                  $query = "SELECT * FROM add_admin WHERE id='$id'";
                  $result = mysqli_query($con, $query);
                  // To get only one row data
                  $data = $result->fetch_assoc();
                  // $title=$data_row['title'];
                }
                ?>
                <div class="card bg-dark">
                  <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1">A RIDE AS </span>
                    <span class="text-white font-weight-bold h1"> GOOD AS THE BUS</span>
                  </h1>
                  <div class="card-header bg-primary ">
                    <h3 class="card-title text-white font-weight-bold ml-5 ">Edit operators</h3>
                  </div>
                  <?php
                  if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $confirm_password = $_POST['confirm_password'];
                    if ($name != ""  && $email != "" && $password != ""  && $confirm_password != "") {
                      $query = "UPDATE add_admin SET name='$name', email='$email',  password='$password',confirm_password='$confirm_password' WHERE id='$id'";
                      $result = mysqli_query($con, $query);
                      // echo"$result";
                      if ($result)
                  ?>
                      <meta http-equiv="refresh" content=" 0 ; url = manageadmin.php" />
                  <?php
                  } else {
                    echo "Update Failed.";
                  }
                }
                  ?>
                  <form action="#" method="POST" enctype="multipart/form-data ">
                    <div class="card-body bg-secondary">
                      <div class="row ">
                        <div class="form-group col-md-6">
                          <label for="exampleInputEmail1"> First Name:</label>
                          <input type="text" class="form-control" placeholder="Enter name" name="name" value="<?php echo $data['name']; ?>">
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">email:</label>
                          <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $data['email']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">password:</label>
                          <input type="password" class="form-control" placeholder="contacts." name="password" value="<?php echo $data['password']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">confirm_password:</label>
                          <input type="password" class="form-control" placeholder="" name="confirm_password" value="<?php echo $data['confirm_password']; ?>">
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                  </form>
                
              </div>
          
    </div>   
		   
			 
