<?php 

$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
// connection()
// select database
// executing query

   

    $q="UPDATE `tbl_user` SET `username`='$username',`password`='$password' WHERE id=$id";

    $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"script_language");
    $result=mysqli_query($con,$q);

echo "User update sucessuful"


?>
