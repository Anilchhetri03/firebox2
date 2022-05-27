<?php
include('header.php');

?>

<body>

    <?php include('sidebar.php'); ?>


    <!--------main-content------------->

 
<a href="addroutes.php" class="previous round">Add routes</a>
<div class="container-fluid " id="crude">
    <div class="card-body bg-secondary">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Travels</th>
                    <th>Departs</th>
                    <th>Arrives</th>
                    <th>seats</th>
                    <th>fare</th>
                    <th>Book Now</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM travel_routes";
                $result = mysqli_query($con, $query);
                $i = 0;
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo ++$i; ?></td>

                        <td><?php echo $data['travel']; ?></td>
                        <td><?php echo $data['depart']; ?></td>
                        <td><?php echo $data['arrive']; ?></td>
                        <td><?php echo $data['seats']; ?></td>
                        <td><?php echo $data['fare']; ?></td>
                        <td> <a href="../admin/bookbus/addroutes.php?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-danger float-left">Book Now</button></a></td>
                        <td>


                            <a href="deleteroutes.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-danger float-left">Delete</button></a>
                            <a href="updateroutes.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-xs btn-danger float-left">Edit</button></a>

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
    <?php include('footer.php'); ?>