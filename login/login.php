<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

include "../database/dbConnect.php";
$q="SELECT * FROM `tbl_user` WHERE `username`='$username' and `password`='$password' and status='Active'";  // and status='Active'"

$result=mysqli_query($con,$q)  or die(mysqli_error($con)) ;

if(mysqli_fetch_array($result,MYSQLI_ASSOC)){

   $_SESSION['username']=$username;
   
   
   
    // echo("Login Succesful");  
    // header("location:menu.php"); 

    // header("location:../index/index.php"); 

    // $location.replace("menu.php");
//  sleep(2);
}
else{
    // http_response_code(400);
    http_response_code(403);
// $_SESSION['errorMsg']="either username password is wrong or you are not active";
 echo "either username password is wrong or you are not active";
// header("location:../login/loginForm.php");
}
?>