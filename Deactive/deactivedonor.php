<?php

try{


$id=$_GET['id'];
$status="Pending";
// connection()
// select database
// executing query

include "../database/dbConnect.php";

$q="UPDATE `donors` SET `status`='$status' WHERE id=$id";
$result=mysqli_query($con,$q);


sleep(1);
// echo "success";
header("location:../displaydata/activedonor.php");

}
catch(Exception $e){
	throw $e;
}

?>