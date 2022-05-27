<nav id="sidebar">
    <div class="sidebar-header bg-dark text-light" style="font-size: larger; font-weight:bold">
        <i class="fas fa-bus"></i> <span>Busyatra</span>
    </div>
    <ul class="list-unstyled components bg-danger">
        <li class="active">
            <a href="../home.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
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
                <i class="material-icons">border_color</i><span> Add Admin</span></a>
            <ul class="collapse list-unstyled menu" id="pageSubmenu11">
                <li>
                    <a href="admincrud/addadmin.php">add Admin</a>
                </li>
                <li>
                    <a href="admincrud/manageadmin.php">Manage Admin</a>
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

      

        <li class="">
            <a href="#"><i class="material-icons">date_range</i><span>copy</span></a>
        </li>

        <li class="">
            <a href="#"><i class="material-icons">library_books</i><span>Calender</span></a>
        </li>


    </ul>


</nav>

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
  
  