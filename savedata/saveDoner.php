<?php
try{
  

$fullname=$_POST['fullname'];
$gender=$_POST['gender'];
$bloodGroup=$_POST['bloodGroup'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$birthdate=$_POST['birthdate'];
$donor=$_POST['donor'];
// $uploadphoto=$_FILES['uploadphoto']['name'];
$ihaveread=$_POST['ihaveread'];
$iagree=$_POST['iagree'];
$donorRegisterDate=$_POST['donorRegisterDate'];
$status="Pending";

include "../database/dbConnect.php";
// move_uploaded_file($_FILES['uploadphoto']['tmp_name'],"../img/donor_images/$uploadphoto");//uploading files in server

$q="INSERT INTO `donors`(`fullname`, `gender`, `bloodgroup`, `address`, `email`, `phone`, `birthdate`, `newdonor`, `ihaveread`, `iagree`,`donorRegisterDate`, `status`) VALUES ('$fullname','$gender','$bloodGroup','$address','$email','$phone','$birthdate','$donor','$ihaveread','$iagree','$donorRegisterDate','$status')";


$result=mysqli_query($con,$q);


sleep(2);

}
catch(Exception $e){
	throw $e;
}

?>