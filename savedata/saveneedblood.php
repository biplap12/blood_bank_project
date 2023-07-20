<?php
try{
  

$patientname=$_POST['patientname'];
$bloodgroup=$_POST['bloodgroup'];
$gender=$_POST['gender'];
$unitofblood=$_POST['unitofblood'];
$hospitalNameAddress=$_POST['hospitalNameAddress'];
$reasonforblood=$_POST['reasonforblood'];
$city=$_POST['city'];
$requiredate=$_POST['requiredate'];
$contactname=$_POST['contactname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$current_date_time=$_POST['current_date_time'];
$status="Pending";



include "../database/dbConnect.php";
$q="INSERT INTO `needblood`(`patientname`, `bloodgroup`, `gender`,`unitofblood`,`hospitalNameAddress`, 
`city`,`requiredate`, `contactname`, `email`, `phone`,
 `reasonforblood`,`current_date_time`,`status`) VALUES ('$patientname','$bloodgroup',
 '$gender','$unitofblood','$hospitalNameAddress','$city','$requiredate','$contactname',
 '$email','$phone','$reasonforblood','$current_date_time','$status')";


$result=mysqli_query($con,$q);


sleep(2);

}
catch(Exception $e){
	throw $e;
}

?>