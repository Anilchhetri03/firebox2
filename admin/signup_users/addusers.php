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
			<h4 class="breadcrumb-title">Add Users</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Add Users</li>
			</ul>
		</div>

		<?php
		if (isset($_POST['submit'])) {
			$fname = addslashes($_POST['fname']);
			$Lname = addslashes($_POST['Lname']);
			$email = addslashes($_POST['email']);
			$password = addslashes(md5($_POST['password']));
			$confirm_password = addslashes(md5($_POST['confirm_password']));

			if ($fname != "" && $Lname != "" && $email != "" && $password != "" && $confirm_password != "") {
				if ($password == $confirm_password) {
					$query = "INSERT INTO signup_users(fname,Lname, email, password) VALUES ('$fname', '$Lname','$email', '$password')";
					$result = mysqli_query($con, $query);
					if ($result) {
		?>                 <meta http-equiv = "refresh" content = " 0 ; url =manageusers.php"/>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<strong>User is added successfully.</strong>
						</div>

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
							<strong>usres couldn't be added successfully.</strong>
							
						</div>
		<?php
					}
				} else {
					echo "Both password field doesn't match.";
				}
			} else {
				echo "All fields are necessary.";
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
									<label class="col-form-label">fName</label>
									<div>
										<input class="form-control" type="text" name="fname">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Lname</label>
									<div>
										<input class="form-control" type="text" name="Lname">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Email</label>
									<div>
										<input class="form-control" type="email" name="email">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Password</label>
									<div>
										<input class="form-control" type="password" name="password">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Confirm Password</label>
									<div>
										<input class="form-control" type="password" name="confirm_password">
									</div>
								</div>

								<div class="col-12">
									<button type=" submit" name="submit" class="btn btn-primary">Submit</button>
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
			 
