<?php
try{
  

$fullname=$_POST['fullname'];
$fathername=$_POST['fathername'];
$gender=$_POST['gender'];
$bloodGroup=$_POST['bloodGroup'];
$country=$_POST['country'];
$city=$_POST['city'];
$street=$_POST['street'];
$wardno=$_POST['ward'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
$birthdate=$_POST['birthdate'];
$donor=$_POST['donor'];
$uploadphoto=$_FILES['uploadphoto']['name'];
$ihaveread=$_POST['ihaveread'];
$iagree=$_POST['iagree'];
$status="Pending";

include "../database/dbConnect.php";
move_uploaded_file($_FILES['uploadphoto']['tmp_name'],"../img/donor_images/$uploadphoto");//uploading files in server

$q="INSERT INTO `donors`(`fullname`, `fathername`, `gender`, `bloodgroup`, `country`, `city`, `street`, `wardno`, `address`, `email`, `phone1`, `phone2`, `birthdate`, `newdonor`, `photo`, `ihaveread`, `iagree`, `status`) VALUES ('$fullname','$fathername','$gender','$bloodGroup','$country','$city','$street','$wardno','$address','$email','$phone1','$phone2','$birthdate','$donor','$uploadphoto','$ihaveread','$iagree','$status')";


$result=mysqli_query($con,$q);


sleep(1);
// echo "success";
// header("location:loginForm.php");
}
catch(Exception $e){
	throw $e;
}

?>