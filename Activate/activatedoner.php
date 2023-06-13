<?php

// try{


// $id=$_GET['id'];
// $status="Active";
// // connection()
// // select database
// // executing query

// include "../database/dbConnect.php";

// $q="UPDATE `donors` SET `status`='$status' WHERE id=$id";
// $result=mysqli_query($con,$q);


// sleep(1);
// // echo "success";
// // header("location:../displaydata/activedonor.php");

// }
// catch(Exception $e){
// 	throw $e;
// }

?>

<?php
include "../database/dbConnect.php";
$id = $_GET["id"];

// Update the status to "active" in the backend database
$updateQuery = "UPDATE `donors` SET `status`='Active' WHERE id=$id";
mysqli_query($con, $updateQuery);

// Redirect back to the viewdoner.php page
header("location:../view/viewdonor.php?id=$id");

?>