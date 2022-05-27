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
	

           <a href="../index.php" class="previous round">Previous</a>
           <div class="row">
                <a name="" id="" class="btn btn-primary mb-2" href="addusers.php" role="button">Add users</a>
            </div>
<div class="container-fluid " id="crude">
                <div class="card-body bg-secondary">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Fname</th>
                                <th>LName</th>
                                <th>email</th>
                                <th>password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM signup_users";
                            $result = mysqli_query($con, $query);
                            $i = 0;
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                   
                                    <td><?php echo $data['fname']; ?></td>
                                    <td><?php echo $data['Lname']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['password']; ?></td>
                                    <td>
                                      
                                        
                                    <a href="deleteusers.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-danger float-left">Delete</button></a>
                                    <a href="updateusers.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-danger float-left">Edit</button></a>
                                       
                                    </td>
                                </tr>
                            <?php
                            } 
                            ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
         
		   
			 
			 <!---footer---->
<?php include('../inc/footer.php');?>			 
			 
		