<!-- dabase connection -->
<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="firebox";
$con= new mysqli($servername, $username, $password, $dbname);
if($con-> connect_error){
    echo"error in connecting database";
}

?>