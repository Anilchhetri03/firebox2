<?php
session_start();
require('secure_admin.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>cms dashboard</title>
	    <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="assets/css/custum.css">
        <link rel="stylesheet" href="assets/css/adminlogin.css">
		
		
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	
	
	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  

<div class="wrapper">


        <div class="body-overlay"></div>
?>
		
		<!-------------------------sidebar------------>
<?php 
include('connection/config.php');
?>
		     <!-- Sidebar  -->
        
             <nav id="sidebar">
    <div class="sidebar-header bg-dark text-light" style="font-size: larger; font-weight:bold">
        <i class="fas fa-bus"></i> <span>FIREBOX</span>
    </div>
    <ul class="list-unstyled components bg-danger">
        <li class="active">
            <a href="home.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
        </li>

        <div class="small-screen navbar-display">
            <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons">notifications</i><span> 4 notification</span></a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                    <li>
                        <a href="#">You have 5 new messages</a>
                    </li>
                    <li>
                        <a href="#">You're now friend with Mike</a>
                    </li>
                    <li>
                        <a href="#">Wish Mary on her birthday!</a>
                    </li>
                    <li>
                        <a href="#">5 warnings in Server Console</a>
                    </li>
                </ul>
            </li>

            <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
            </li>

            <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#"><i class="material-icons">person</i><span>user</span></a>
            </li>

            <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
            </li>
        </div>
        <li class="dropdown">
            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span> Add Admin</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu1">
                <li>
                    <a href="admincrud/addadmin.php">add Admin</a>
                </li>
                <li>
                    <a href="admincrud/manageadmin.php">Manage Admin</a>
                </li>
            </ul>
        </li>
        <!-- Book Table -->
        <li class="dropdown">
            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>Book Table</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                <li>
                    <a href="booktable/add.php">Book Reservation</a>
                </li>
                <li>
                    <a href="booktable/manage.php">Manage reservation</a>
                </li>

            </ul>
        </li>
        <!-- Contact us -->
        <li class="dropdown">
            <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span> Contact us</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu3">
                <li>
                    <a href="contact_us/add.php">add contact</a>
                </li>
                <li>
                    <a href="contact_us/manage.php">manage contact</a>
                </li>

            </ul>
        </li>
   
        <!--welcome firebox resturent that is in index page-->
        <li class="dropdown">
            <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">content_copy</i><span>welcome restro</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                <li>
                    <a href="#"></a>
                </li>
                <li>
                    <a href="welcome_firebox/add.php">Add Content</a>
                </li>
                <li>
                    <a href="welcome_firebox/manage.php">Manage Content</a>
                </li>
            </ul>
        </li>
        <!-- /////// welcome firebox resturent that is in index page -->
<!-- menu item -->
<li class="dropdown">
            <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">content_copy</i><span>Menu</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                <li>
                    <a href="#"></a>
                </li>
                <li>
                    <a href="menu/add.php">Add Menu</a>
                </li>
                <li>
                    <a href="menu/manage.php">Manage Menu</a>
                </li>
            </ul>
        </li>
<!--/// menu item -->

        <!-- chef -->
        <li class="dropdown">
            <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>Chef</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu6">
                <li>
                    <a href="chef/add.php">Add Chef</a>
                </li>
                <li>
                    <a href="chef/manage.php">Manage Chef</a>
                </li>

            </ul>
        </li>
        <li class="dropdown">
            <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>About content</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                <li>
                    <a href="about_content/add.php">Add about_content</a>
                </li>
                <li>
                    <a href="about_content/manage.php">Manage about_content</a>
                </li>

            </ul>
        </li>

<!-- gallery -->
<li class="dropdown">
            <a href="#pageSubmenu8" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>Gallery</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu8">
                <li>
                    <a href="gallery/add.php">Add gallery</a>
                </li>
                <li>
                    <a href="gallery/manage.php">Manage about_content</a>
                </li>

            </ul>
        </li>
<!--/////////////////////////////// gallery -->
      
      



       
        <li class="">
            <a href="#"><i class="material-icons">date_range</i><span>copy</span></a>
        </li>

        <li class="">
            <a href="#"><i class="material-icons">library_books</i><span>Calender</span></a>
        </li>


    </ul>


</nav>

  
  
		<!--------page-content---------------->
		
		
		   
		   <!--top--navbar----design--------->

           <div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar ">
		      <nav class="navbar  navbar-expand-lg bg-danger">
			     <button type="button" id="sidebar-collapse" class="d-xl-block d-lg-block d-md-none d-none">
				   <span class="material-icons">arrow_back_ios</span>
				 </button>
				 
				 <a class="navbar-brand" href="#">Dashboard</a>
				 <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
				   data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle">
				    <span class="material-icons">more_vert</span>
				 </button>
				 <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarcollapse">
				    
					<ul class="nav navbar-nav ml-auto">
					   
					   <li class="nav-item dropdown active">
					  <a class="nav-link " href="#" data-toggle="dropdown">
					    <span class="material-icons">notifications</span>	
						<span class="notification">4</span>
						</a>
						<ul class="dropdown-menu">
						   <li>
						     <a href="#">You have 4 New Messages</a>
						   </li>
						    <li>
						     <a href="#">You have 4 New Messages</a>
						   </li>
						    <li>
						     <a href="#">You have 4 New Messages</a>
						   </li>
						    <li>
						     <a href="#">You have 4 New Messages</a>
						   </li>
						</ul>
					</li>
					
					<li class="nav-item dropdown active">
					  <a class="nav-link " href="#" data-toggle="dropdown">
					    <span class="material-icons">person</span>	
						
						</a>
						<ul class="dropdown-menu">
						   <li>
						     <a href="loginprocess/adminlogout.php">Admin logout</a>
						   </li>
						    <li>
						     <a href="#">more</a>
						   </li>
						   
						</ul>
					</li>
			
					<li class="nav-item">
					  <a class="nav-link" href="#"><span class="material-icons">apps</span></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#"><span class="material-icons">person</span></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#"><span class="material-icons">settings</span></a>
					</li>
				    
					</ul>
				 
				 </div>
				 
			  </nav>
		   </div>
		
   
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/jquery-3.3.1.min.js"></script>
  
  
        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar-collapse").on('click', function() {
                    $('#sidebar').toggleClass('active');
                    $('#content').toggleClass('active');
                });

                $(".more-button,.body-overlay").on('click', function() {
                    $('#sidebar,.body-overlay').toggleClass('show-nav');
                });

            });
        </script>
		   	   
		   
		   <!--------main-content------------->
<?php include('inc/main-content.php');?>		   
		   
		 
      -->
  	 
			 <!---footer---->
<?php include('inc/footer.php');?>			 
			 
	
  