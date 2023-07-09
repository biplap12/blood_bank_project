<?php 
session_start();
//  include "../header/header.php";
 include "../database/dbConnect.php";
 

$username=$_SESSION['username'];
$password=$_POST['new_password'];

// connection()
// select database
// executing query

   

    $q = "UPDATE `tbl_user` SET `password`='$password' WHERE username='$username'";
    
    $result=mysqli_query($con,$q);

    if($result){
       echo "password change successfully";
    }
    else {
        echo "error";
    }
   
sleep(2);


?>