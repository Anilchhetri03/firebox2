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
		 
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="content-wrapper">
      <div class="content-header">
        <a href="index.php" class="previous round">&#8249;</a>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <?php
                if (isset($_GET['id'])) {
                  $id = $_GET['id'];
                  $query = "SELECT * FROM choose_us WHERE id='$id'";
                  $result = mysqli_query($con, $query);
                  // To get only one row data
                  $data = $result->fetch_assoc();
                  // $title=$data_row['title'];
                }
                ?>
                <div class="card">
                  <h1 class="text-center p-3 mw-100"> <span class="text-danger font-weight-bold h1">X</span>
                    <span class="text-white font-weight-bold h1">dezo</span><span>&nbsp&nbsp&nbsp&nbsp&nbsp
                      Technologies</span>
                  </h1>
                  <div class="card-header bg-primary ">
                    <h3 class="card-title text-white font-weight-bold ml-5 ">Edit Developers</h3>
                  </div>
                  <?php
                 if (isset($_POST['update'])) {

                   // if(!($_FILES['dataFile']['error']))
                   
                   $dataFile = $_FILES['dataFile']['name'];
                   $filesize = $_FILES['dataFile']['size'];
                   $explode_values = explode('.', $dataFile);
                   $name = $explode_values[0];
                   $fname = str_replace(' ', '', $name);
                   $finalname = strtolower($fname . time());
                   $extention = $explode_values[1];
                   $finalfile = $finalname . "." . $extention;
                   $loc = $_POST['subtitle'];
                   $title = $_POST['decp'];
                   
       
                   if ($filesize <= 3000000) {
                       if ($extention == 'jpg' || $extention == 'JPG' || $extention == 'PNG' || $extention == 'png' || $extention == 'jpeg') {
                           if (move_uploaded_file($_FILES['dataFile']['tmp_name'], "../uploads/" . $finalfile)) {
                               $query = "UPDATE choose_us SET  icon='$finalfile',subtitle='$loc',decp='$title' WHERE id='$id'";
                               $result = mysqli_query($con, $query);
                               if ($result) {
               ?>
                                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                       <strong>File is added successfully.</strong>
                                   </div>
                              
                            <meta http-equiv = "refresh" content = " 0 ; url = managechoose.php"/>
         
                                   <script>
                                       $(".alert").alert();
                                   </script>
                               <?php
                               } else {
                               ?>
                                   <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                       <strong>File couldn't be added.</strong>
                                   </div>
               <?php
                               }
                           } else {
                               echo "File couldn't be uploaded successfully.";
                           }
                       } else {
                           echo "File format not accepted.";
                       }
                   } else {
                       echo "File size exceeded. Limited to 2MB.";
                   }
               }
               ?>
       

      

                  <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="card-body bg-secondary">
                      <div class="row ">
                      
                        <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">Name:</label>
                          <input type="file" class="form-control" placeholder="dataFile" name="dataFile" value="">
                           </div>
                           <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">Name:</label>
                          <input type="text" class="form-control" placeholder="dataFile" name="subtitle" value="<?php echo $data['subtitle']?>">
                         
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputEmail1">Name:</label>
                          <input type="text" class="form-control" placeholder="" name="decp" value="<?php echo $data['decp']?>">
                        </div>
                      </div>    
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="update">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
			 
			 <!---footer---->
<?php include('../inc/footer.php');?>			 
	