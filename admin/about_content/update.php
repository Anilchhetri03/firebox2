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
		
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Destinations</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        if ($msg == "dsuccess") {
    ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>destinations deleted successfully.</strong>
            </div>

            <script>
                $(".alert").alert();
            </script>
        <?php
        }

        if ($msg == "derror") {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>destinations is not deleted successfully.</strong>
            </div>

            <script>
                $(".alert").alert();
            </script>
    <?php
        }
    }
    ?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <a name="" id="" class="btn btn-primary mb-2" href="adddestination.php" role="button">Add File</a>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Title</th>

                            <th>Images</th>
                            <th>locations</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_query = "SELECT * FROM firebox_welcome_resturent";
                        $select_result = mysqli_query($con, $select_query);
                        $i = 0;
                        
                        while ($data_select = mysqli_fetch_array($select_result)) {
                            
                            ++$i;
                        ?>
                            <tr>
                                <td scope="row"><?php echo $i; ?></td>
                                <td scope="row"><?php echo $data_select['title']; ?></td>
                                <td><img src="<?php echo "../uploads/" . $data_select['filelink']; ?>" alt="" height="150px;" width="200px;"></td>
                                <td scope="row"><?php echo $data_select['location'];  ?></td>
                                <td>
                                    <a name="" id="" class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $data_select['id']; ?>" role="button">Delete</a>
                                    <a name="" id="" class="btn btn-danger btn-sm" href="update.php?id=<?php echo $data_select['id']; ?>" role="button">Edit</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
  
		   
			 
			 <!---footer---->
<?php include('../inc/footer.php');?>			 
			 
	