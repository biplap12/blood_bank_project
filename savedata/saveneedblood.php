<?php
try{
  

$patientname=$_POST['patientname'];
$bloodgroup=$_POST['bloodgroup'];
$gender=$_POST['gender'];
$unitofblood=$_POST['unitofblood'];
$hospitalNameAddress=$_POST['hospitalNameAddress'];
$country=$_POST['country'];
$city=$_POST['city'];
$doctorname=$_POST['doctorname'];
$requiredate=$_POST['requiredate'];
$contactname=$_POST['contactname'];
$needbloodaddress=$_POST['needbloodaddress'];
$email=$_POST['email'];
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
$birthdate=$_POST['birthdate'];
$reasonforblood=$_POST['reasonforblood'];
$uploadphoto=$_FILES['uploadphoto']['name'];
$current_date_time=$_POST['current_date_time'];
$status="Pending";



include "../database/dbConnect.php";
move_uploaded_file($_FILES['uploadphoto']['tmp_name'],"../img/needblood_images/$uploadphoto");//uploading files in server

$q="INSERT INTO `needblood`(`patientname`, `bloodgroup`, `gender`,`unitofblood`,`hospitalNameAddress`, `country`, `city`, `doctorname`, `requiredate`, `contactname`,`needbloodaddress`, `email`, `phone1`, `phone2`, `birthdate`, `reasonforblood`,`photo`,`current_date_time`,`status`) VALUES ('$patientname','$bloodgroup','$gender','$unitofblood','$hospitalNameAddress','$country','$city','$doctorname','$requiredate','$contactname','$needbloodaddress','$email','$phone1','$phone2','$birthdate','$reasonforblood','$uploadphoto','$current_date_time','$status')";


$result=mysqli_query($con,$q);


sleep(2);
// echo "success";
// header("location:loginForm.php");
}
catch(Exception $e){
	throw $e;
}

?>