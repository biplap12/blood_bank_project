<?php

try{


$id=$_GET['id'];
$status="Active";
// connection()
// select database
// executing query

include "../database/dbConnect.php";

$q="UPDATE `tbl_user` SET `status`='$status' WHERE id=$id";
$result=mysqli_query($con,$q);


sleep(1);
// echo "success";
header('location:../displaydata/displayUser.php');

}
catch(Exception $e){
	throw $e;
}

?>