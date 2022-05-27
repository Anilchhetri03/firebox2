<?php
require('../connection/config.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if ($email != "" && $password != "") {
        $query = "SELECT * FROM  add_admin WHERE email='$email' && password='$password'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        print_r($count);
        if ($count == 1) {
            $row = $result->fetch_assoc();
            //Starting session of the admin
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email']; 
         
            
            header("Location: ../home.php?msg=login_success");
        } 
        
        else {
            header("Location: ../index.php?msg=login_unsuccess");
        }
    } else {
        echo "All fields are necessary.";
    }
}
?>