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
		 
           <main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Add File</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li>Add File</li>
            </ul>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $dataFile = $_FILES['dataFile']['name'];
            $filesize = $_FILES['dataFile']['size'];
            $explode_values = explode('.', $dataFile);
            $name = $explode_values[0];
            $fname = str_replace(' ', '', $name);
            $finalname = strtolower($fname . time());
            $extention = $explode_values[1];
            $finalfile = $finalname . "." . $extention;

            $ftype = $_POST['decp'];

            if ($filesize <= 3000000) {
                if ($extention == 'jpg' || $extention == 'JPG' || $extention == 'PNG' || $extention == 'png' || $extention == 'jpeg') {
                    if (move_uploaded_file($_FILES['dataFile']['tmp_name'], "../uploads/" . $finalfile)) {
                        $query = "INSERT INTO gallery (title,img,decp) VALUES ('$title','$finalfile','$ftype')";
                        $result = mysqli_query($con, $query);
                        if ($result) {
        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>File is added successfully.</strong>
                            </div>
                       
                     <meta http-equiv = "refresh" content = " 0 ; url = manage.php"/>
  
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

        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-8 m-b30">
                <div class="widget-box">
                    <div class="widget-inner">
                        <form class="edit-profile m-b30" form action="#" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-12">
                                    <div class="form-group col-md-12">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Image</label>
                                        <input type="file" class="form-control" name="dataFile" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Description</label>
                                        <input type="text" class="form-control" name="decp" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>
			 <!---footer---->
<?php include('../inc/footer.php');?>			 
	