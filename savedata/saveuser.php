<?php




try{

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$status="pending";
// connection()
// select database
// executing query

include "../database/dbConnect.php";

$q=" INSERT INTO `tbl_user`( `name` , `phone` , `email` , `username`, `password`, `status`) VALUES ('$name','$phone','$email','$username','$password','$status')";
$result=mysqli_query($con,$q);


sleep(0);
echo "success";
// header("location:loginForm.php");
}
catch(Exception $e){
	throw $e;
}

?>