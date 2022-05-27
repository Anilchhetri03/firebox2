
<div class="wrapper">
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
       
        <!-- //////////////Why chooose with us -->
       
        <li class="">
            <a href="viewdestination.php"><i class="material-icons">date_range</i><span>View Destination</span></a>
        </li>
        <li class="">
            <a href="passengerinfo.php"><i class="material-icons">date_range</i><span>Passenger Detail</span></a>
        </li>
        <li class="">
            <a href="busroutes.php"><i class="material-icons">date_range</i><span>Buses Routes</span></a>
        </li>
        <li class="">
            <a href="merchantprofile.php"><i class="material-icons">date_range</i><span>Merchant Profile</span></a>
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
		