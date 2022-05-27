<?php
session_start();
if(isset($_SESSION['email']))
{

}
else 
{
    echo header("Location: ../index.php?msg=error");
}
?><?php include('../inc/header.php');
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
                  $query = "SELECT * FROM booktable WHERE id='$id'";
                  $result = mysqli_query($con, $query);
                  // To get only one row data
                  $data = $result->fetch_assoc();
                  // $title=$data_row['title'];
                }
                ?>
                <div class="card bg-dark">
                  <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1">The </span>
                    <span class="text-white font-weight-bold h1">Firebox</span>
                  </h1>
                  <div class="card-header bg-primary ">
                    <h3 class="card-title text-white font-weight-bold ml-5 ">Edit operators</h3>
                  </div>
                  <?php
                  if (isset($_POST['submit'])) {
                    $date = $_POST['date'];
                    $name = $_POST['name'];
                    $time = $_POST['time'];
                    $phone = $_POST['phone'];
                    $people = $_POST['people'];
                    $email = $_POST['email'];
                    if ($date != ""  && $name != "" && $time != "" && $phone != ""  &&  $people != ""  &&$email != "") {
                      $query = "UPDATE booktable SET date='$date', name='$name', time='$time', phone='$phone',people='$people,'email='$email' WHERE id='$id'";
                      $result = mysqli_query($con, $query);
                      // echo"$result";
                      if ($result)
                  ?>
                      <meta http-equiv="refresh" content=" 0 ; url = manage.php" />
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
                          <label for="exampleInputEmail1"> Date:</label>
                          <input type="text" class="form-control" placeholder="EnterDate" name="date" value="<?php echo $data['date']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1"> Name:</label>
                          <input type="text" class="form-control" placeholder="name" name="name" value="<?php echo $data['name']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">time:</label>
                          <input type="email" class="form-control" placeholder="time" name="time" value="<?php echo $data['time']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">phone:</label>
                          <input type="tel" class="form-control" placeholder="contact" name="phone" value="<?php echo $data['phone']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">people:</label>
                          <input type="text" class="form-control" placeholder="" name="people" value="<?php echo $data['people']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputPassword1">Email:</label>
                          <input type="email" class="form-control" placeholder="" name="email" value="<?php echo $data['email']; ?>">
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
		   
			 
