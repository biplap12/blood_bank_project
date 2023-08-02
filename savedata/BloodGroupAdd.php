<?php
 include("../database/dbConnect.php");


try{
 


$bloodGroup =$_POST['bloodGroup'];



// move_uploaded_file($_FILES['uploadphoto']['tmp_name'],"../img/donor_images/$uploadphoto");//uploading files in server

$q="INSERT INTO `bloodgroup`( `bloodGroup`) VALUES ('$bloodGroup');";


$result=mysqli_query($con,$q);
sleep(1);
}
catch(Exception $e){
	throw $e;
}

?>