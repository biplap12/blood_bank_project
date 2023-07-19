<?php





try{
  

$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
$messageDateTime=$_POST['messageDateTime'];


include "../database/dbConnect.php";

// $q=" INSERT INTO `tbl_user`( `name` , `phone` , `email` , `username`, `password`, `status`) VALUES ('$name','$phone','$email','$username','$password','$status')";
$q=" INSERT INTO `message` (`fullname`, `phone`, `email`, `message`,`messageDateTime`) VALUES ('$fullname','$phone','$email','$message','$messageDateTime')";

$result=mysqli_query($con,$q);


sleep(1);
// echo "success";
// header("location:loginForm.php");
}
catch(Exception $e){
	throw $e;
}

?>