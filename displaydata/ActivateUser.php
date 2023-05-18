<?php
try{


$id=$_GET['id'];
$status="Active";
// connection()
// select database
// executing query

include "db_connect.php";

$q="UPDATE `tbl_user` SET `status`='$status' WHERE id=$id";
$result=mysqli_query($con,$q);


sleep(1);
echo "success";
}
catch(Exception $e){
	throw $e;
}

?>