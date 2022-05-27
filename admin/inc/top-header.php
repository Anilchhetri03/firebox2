
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
						     <a href="../loginprocess/adminlogout.php">Admin logout</a>
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
        <script src="../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.3.1.min.js"></script>


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
		   