<?php
include('header.php');

?>
  <body>
  
  <?php include('sidebar.php');?>	
		
		   
		   <!--------main-content------------->
           <a href="home.php" class="previous round">Previous</a> <br>


<div class="container-fluid " id="crude">
    <div class="card-body bg-secondary">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="passenger bg-dark text-white">
                    <th>S.N.</th>
                    <th>first name</th>
                    <th>email</th>
                    <th>phone Number</th>
                    <th>Departure_date</th>
                    <th>Departure_Time</th>
                    <th>passenger</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM bookbus";
                $result = mysqli_query($con, $query);
                $i = 0;
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo ++$i; ?></td>

                        <td><?php echo $data['fname']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['phone']; ?></td>
                        <td><?php echo $data['departure_date']; ?></td>
                        <td><?php echo $data['departure_time']; ?></td>
                        <td><?php echo $data['passenger']; ?></td>
                      
                    </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</div>	   
		   
			 
			 <!---footer---->
<?php include('footer.php');?>			 
			 
	
  