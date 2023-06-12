<?php





try{
  

$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$massage=$_POST['massage'];


include "../database/dbConnect.php";

// $q=" INSERT INTO `tbl_user`( `name` , `phone` , `email` , `username`, `password`, `status`) VALUES ('$name','$phone','$email','$username','$password','$status')";
$q=" INSERT INTO `massage` (`fullname`, `phone`, `email`, `massage`) VALUES ('$fullname','$phone','$email','$massage')";

$result=mysqli_query($con,$q);


sleep(1);
// echo "success";
// header("location:loginForm.php");
}
catch(Exception $e){
	throw $e;
}

?>