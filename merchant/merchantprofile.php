<?php
include('header.php');

?>
  <body>
  
  <?php include('sidebar.php');?>	
		
		   
		   <!--------main-content------------->
           <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Files</h1>
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
                <strong>File is deleted successfully.</strong>
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
                <strong>File is not deleted successfully.</strong>
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
                            <th>Name</th>
                            <th>Phone_Number</th>
                            <th>Image</th>
                            <th>Location</th>
                          
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_query = "SELECT * FROM merchant_profile";
                        $select_result = mysqli_query($con, $select_query);
                        $i = 0;
                        while ($data_select = mysqli_fetch_array($select_result)) {
                            
                          
                        ?>
                            <tr>
                                <td scope="row"><?php echo ++$i; ?></td>
                                <td scope="row"><?php echo $data_select['name']; ?></td>
                                <td scope="row"><?php echo $data_select['number']; ?></td>
                                <td><img src="<?php echo "../admin/uploads/" . $data_select['img']; ?>" alt="" height="150px;" width="200px;"></td>
                                <td scope="row"><?php echo $data_select['location'];  ?></td>
                            
                               
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
		   
			 
			 <!---footer---->
<?php include('footer.php');?>			 
			 
	
  