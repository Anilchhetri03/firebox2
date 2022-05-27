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
			
		   <main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Book Your Table now</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Add Users</li>
			</ul>
		</div>

		<?php
		if (isset($_POST['submit'])) {
			$date = $_POST['date'];
			$name = $_POST['name'];
			$time = $_POST['time'];
			$phone = $_POST['phone'];
			$people = $_POST['people'];
			$email = $_POST['email'];
			
			

		
					$query = "INSERT INTO booktable(date,name, time, phone,people,email) 
					
					VALUES ('$date', '$name','$time', '$phone', '$people', '$email')";
					$result = mysqli_query($con, $query);
					if ($result) {
		?>                 <meta http-equiv = "refresh" content = " 0 ; url =manage.php"/>
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
				} 
			
		
		?>

		<div class="row">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-6 m-b30 mx-5">
				<div class="widget-box">
					<div class="widget-inner">
						<form class="edit-profile m-b30" form action="#" method="POST" enctype="multipart/form-data">
							<div class="row ">
								<div class="form-group col-12 ">
									<label class="col-form-label">Date</label>
									<div>
										<input class="form-control" type="date" name="date">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Name</label>
									<div>
										<input class="form-control" type="text" name="name">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Time</label>
									<div>
										<input class="form-control" type="time" name="time">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Phone</label>
									<div>
										<input class="form-control" type="tel" name="Phone">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">people</label>
									<div>
										<input class="form-control" type="text" name="people">
									</div>
								</div>
								<div class="form-group col-12">
									<label class="col-form-label">Email</label>
									<div>
										<input class="form-control" type="email" name="email">
									</div>
								</div>
								


								<div class="col-12 p-2 ">
									<button type=" submit" name="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
            <div class="col-lg-4 mt-5">
                <img src="../assets/img/bootable.jpg" alt=""  style="height: 450px;" >

            </div>
			<!-- Your Profile Views Chart END-->
    </div>
    
</main>

   
			 
			 <!---footer---->
<?php include('../inc/footer.php');?>			 
			 
