<?php 
 include "../header/header.php";
 include "../database/dbConnect.php";
 
$id=$_POST['id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
// connection()
// select database
// executing query

   

    // $q="UPDATE `tbl_user` SET `username`='$username',`password`='$password' WHERE id=$id";
    $q = "UPDATE `tbl_user` SET `name`='$name',`phone`='$phone',`email`='$email',`username`='$username' WHERE id='$id'";
    
    $result=mysqli_query($con,$q);

   
sleep(3);


?>