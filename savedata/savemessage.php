<?php


try{
  

$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
$messageDateTime=$_POST['messageDateTime'];


include "../database/dbConnect.php";

$q=" INSERT INTO `message` (`fullname`, `phone`, `email`, `message`,`messageDateTime`) VALUES ('$fullname','$phone','$email','$message','$messageDateTime')";

$result=mysqli_query($con,$q);


sleep(2);

}
catch(Exception $e){
	throw $e;
}

?>