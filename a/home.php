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
        <i class="fas fa-bus"></i> <span>Busyatra</span>
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
            <a href="#pageSubmenu11" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span> TopDestinations</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu11">
                <li>
                    <a href="Top_destinations/adddestination.php">add Destinations</a>
                </li>
                <li>
                    <a href="Top_destinations/managedest.php">Manage Destinations</a>
                </li>
            </ul>
        </li>
        <!-- health intros -->
        <li class="dropdown">
            <a href="#pageSubmenu13" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>Health Intros</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu13">
                <li>
                    <a href="healthinformation/addhealth.php">Add healthinfromation</a>
                </li>
                <li>
                    <a href="healthinformation/managehealth.php">Manage healthinfromation</a>
                </li>

            </ul>
        </li>
        <!-- popular routes -->
        <li class="dropdown">
            <a href="#homeSubmenu25" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span> Popular Routes</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu25">
                <li>
                    <a href="popular_routes/addroutes.php">add routes</a>
                </li>
                <li>
                    <a href="popular_routes/manageroutes.php">manage routes</a>
                </li>

            </ul>
        </li>
        <!-- ///popular routes -->
        <!-- popular operators -->
        <li class="dropdown">
            <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">content_copy</i><span>operators</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                <li>
                    <a href="#"></a>
                </li>
                <li>
                    <a href="popular_operators/addoperators.php">Add operators</a>
                </li>
                <li>
                    <a href="popular_operators/manageoperators.php">Manage operators</a>
                </li>
            </ul>
        </li>
        <!-- ///////popular operators -->


        <!-- Why chooose with us -->
        <li class="dropdown">
            <a href="#pageSubmenu10" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>WHy choose with us</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu10">
                <li>
                    <a href="whychoosewithus/addchoose.php">Add Choose</a>
                </li>
                <li>
                    <a href="whychoosewithus/managechoose.php">Manage choose</a>
                </li>

            </ul>
        </li>
        <!-- //////////////Why chooose with us -->

        <!-- about page content -->
        <li class="dropdown">
            <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>About us </span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                <li>
                    <a href="about_us/add_about.php">Add about</a>
                </li>
                <li>
                    <a href="about_us/manage_about.php">Manage about</a>
                </li>

            </ul>
        </li>
        <!-- /////////////about page content -->
          <!-- privacy and term -->
          <li class="dropdown">
            <a href="#pageSubmenu19" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>Privacy </span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu19">
                <li>
                    <a href="privacy/addprivacy.php">Add about</a>
                </li>
                <li>
                    <a href="privacy/manageprivacy.php">Manage about</a>
                </li>

            </ul>
        </li>
        <!-- //////////////privacy and term -->

          <!-- term content -->
          <li class="dropdown">
            <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>Term </span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                <li>
                    <a href="term/addprivacy.php">Add about</a>
                </li>
                <li>
                    <a href="term/manageprivacy.php">Manage about</a>
                </li>

            </ul>
        </li>
        <!-- /////////////term content -->
             <!--cancellation-->
             <li class="dropdown">
            <a href="#homeSubmenu25" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span> cancellation</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu25">
                <li>
                    <a href="cancellation/add_about.php">add cancellation</a>
                </li>
                <li>
                    <a href="cancellation/manage_about.php">managecancellation</a>
                </li>

            </ul>
        </li>
   <!-- contact_us -->

   <li class="dropdown">
            <a href="#pageSubmenu16" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">extension</i><span>contact</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu16">

                <li>
                    <a href="contactus/addcontact.php"> Add contactus</a>
                </li>
                <li>
                    <a href="contactus/managecontact.php"> Manage contact</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">grid_on</i><span>Faqs</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu6">
                <li>
                    <a href="faqs/addfaqs.php">Add Faqs</a>
                </li>
                <li>
                    <a href="faqs/managefaqs.php">Manage Faqs</a>
                </li>

            </ul>
        </li>
  <!-- cookies -->
  <li class="dropdown">
            <a href="#homeSubmenu21" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span>cookies</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu21">
                <li>
                    <a href="cookie/add_about.php">addcookies</a>
                </li>
                <li>
                    <a href="cookie/manage_about.php">manage cookies</a>
                </li>

            </ul>
        </li>
        <!-- ///cookies -->
         <!-- refunds -->
         <li class="dropdown">
            <a href="#pageSubmenu20" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>refund </span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu20">
                <li>
                    <a href="refund/add_about.php">Add about</a>
                </li>
                <li>
                    <a href="refund/manage_about.php">Manage about</a>
                </li>

            </ul>
        </li>
        <!-- ///////////////////refunds -->
         <!-- help -->
         <li class="dropdown">
            <a href="#pageSubmenu14" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">extension</i><span>HElp</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu14">
                <li>
                    <a href="help/addhelp.php"> Add help</a>
                </li>
                <li>
                    <a href="help/managehelp.php"> Managehelp</a>
                </li>

            </ul>
        </li>
        <!-- /////////////////////help -->






        <li class="dropdown">
            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span> gallery</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                <li>
                    <a href="gallery/addgallery.php">add gallery</a>
                </li>
                <li>
                    <a href="gallery/managegallery.php">managefiles</a>
                </li>

            </ul>
        </li>
        <li class="dropdown">
            <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">extension</i><span>Sign_up Users</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                <li>
                    <a href="signup_users/addusers.php"> Add Users</a>
                </li>
                <li>
                    <a href="signup_users/manageusers.php"> Manage Users</a>
                </li>

            </ul>
        </li>
        <li class="dropdown">
            <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">extension</i><span>Admin</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                <li>
                    <a href="Admincrud/addadmin.php"> Add Admin</a>
                </li>
                <li>
                    <a href="Admincrud/manageadmin.php"> Manage Admin</a>
                </li>

            </ul>
        </li>

        
        <li class="dropdown">
            <a href="#id5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span> Timetable</span></a>
            <ul class="collapse list-unstyled menu" id="id5">
                <li>
                    <a href="timetable/addroutes.php">add gallery</a>
                </li>
                <li>
                    <a href="timetable/manageroutes.php">managegallery</a>
                </li>

            </ul>
        </li>
      
        <!-- driver_destination -->
        <li class="dropdown">
            <a href="#homeSubmenu31" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span> Driver_destination</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu31">
                <li>
                    <a href="driver_destination/adddestination.php">add destination</a>
                </li>
                <li>
                    <a href="driver_destination/managedest.php">  manage destination</a>
                </li>

            </ul>
        </li>
        <li class="dropdown">
            <a href="#homeSubmenu31" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span> merchantprofile</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu31">
                <li>
                    <a href="merchantprofile/adddestination.php">add destination</a>
                </li>
                <li>
                    <a href="merchantprofile/managedest.php">  manage destination</a>
                </li>

            </ul>
        </li>
        <!-- ///////////driver_destination -->
        <!-- driver profiles -->
        <li class="dropdown">
            <a href="#homeSubmenu32" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span> Driver  profile</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu32">
                <li>
                    <a href="driverinfo/adddestination.php">add destination</a>
                </li>
                <li>
                    <a href="driverinfo/managedest.php">  manage destination</a>
                </li>

            </ul>
        </li>
        <!-- ///////driver profiles -->
<!-- siteconfig -->
<li class="dropdown">
            <a href="#homeSubmenu25" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span> siteconfig</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu25">
                <li>
                    <a href="siteconfig/addsiteconfig.php">add csiteconfig</a>
                </li>
                <li>
                    <a href="siteconfig/managesiteconfig.php">manage siteconfig</a>
                </li>

            </ul>
        </li>
<!-- //////////////////////siteconfig -->
<!-- intros -->
<li class="dropdown">
            <a href="#homeSubmenu26" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span> intros</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu26">
                <li>
                    <a href="intros/addintros.php">addintros</a>
                </li>
                <li>
                    <a href="intros/manageintros.php">manage intros</a>
                </li>

            </ul>
        </li>
<!-- ///////////////////////////////////intros -->
      
   
        
       
        <!-- ////////////////////////////////////popular routes -->
        <!-- gallery -->
        <li class="dropdown">
            <a href="#homeSubmenu23" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span>manage files</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu23">
                <li>
                    <a href="gallery/addgallery.php">add files</a>
                </li>
                <li>
                    <a href="gallery/managegallery">manage gallery</a>
                </li>

            </ul>
        </li>
        <!-- /////////////gallery -->
      
        <!-- view bus -->
        <li class="dropdown">
            <a href="#homeSubmenu22" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">aspect_ratio</i><span>View Bus</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu22">
                <li>
                    <a href="viewbus/addroutes.php">add Buses</a>
                </li>
                <li>
                    <a href="viewbus/manageroutes.php">manage Buses</a>
                </li>

            </ul>
        </li>
        <!-- ////////////view bus -->

        <li class="dropdown">
            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">apps</i><span>Sliders</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                <li>
                    <a href="addslider.php">Add sliders</a>
                </li>
                <li>
                    <a href="manageslider.php">Manage Sliders</a>
                </li>

            </ul>
        </li>

      
     
        <!-- add buses -->
        <li class="dropdown">
            <a href="#pageSubmenu28" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">extension</i><span>bookbus</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu28">
                <li>
                    <a href="bookbus/addroutes.php"> Add bus</a>
                </li>
                <li>
                    <a href="bookbus/manageroutes.php"> Manage bus</a>
                </li>

            </ul>
        </li>

        <!-- ///add buses -->

<!-- subscribe -->
<li class="dropdown">
            <a href="#pageSubmenu26" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">extension</i><span>Subscribe</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu26">
                <li>
                    <a href="subscribe/add.php"> Add Users</a>
                </li>
                <li>
                    <a href="subscribe/manage.php"> Manage Users</a>
                </li>

            </ul>
        </li>
<!-- /////////////subscribe -->

       
     



        <!-- seatss -->
        <li class="dropdown">
            <a href="#pageSubmenu18" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">extension</i><span>seats</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu18">

                <li>
                    <a href="seats/addseat.php"> Add seats</a>
                </li>
                <li>
                    <a href="seats/manageseat.php"> Manage seats</a>
                </li>
            </ul>
        </li>

        <!-- //////////////////////seatss -->

       
        <li class="dropdown">
            <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>Routes</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                <li>
                    <a href="routes/addroutes.php">add Routes</a>
                </li>
                <li>
                    <a href="routes/manageroutes.php">Manage Routes</a>
                </li>

            </ul>
        </li>


        

        <!-- destinations -->
        <li class="dropdown">
            <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span>Destinations</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                <li>
                    <a href="destinations/adddestinations.php">add Destinations</a>
                </li>
                <li>
                    <a href="destinations/managedestinations.php">Manage Destinations</a>
                </li>

            </ul>
        </li>
      

       


        <!-- travel Routes -->
        <li class="dropdown">
            <a href="#pageSubmenu12" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span> Travels routes</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu12">
                <li>
                    <a href="travel_routes/addroutes.php">add Travels routes</a>
                </li>
                <li>
                    <a href="travel_routes/manageroutes.php">Manage Travels routes</a>
                </li>
            </ul>
        </li>
        <!-- ////////////travel Routes -->
        <!-- scores -->
        <li class="dropdown">
            <a href="#pageSubmenu13" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="material-icons">border_color</i><span> Scores</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu13">
                <li>
                    <a href="scores/addscore.php">add Travels routes</a>
                </li>
                <li>
                    <a href=scores/managescore.php">Manage Travels routes</a>
                </li>
            </ul>
        </li>
        <!-- ////////scores -->
      


       
        


      
      



       
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
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>


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
		   
		 
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $("#sidebar-collapse").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".more-button,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
</script>
  	 
			 <!---footer---->
<?php include('inc/footer.php');?>			 
			 
	
  