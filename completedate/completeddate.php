<?php

try{

    include "../database/dbConnect.php";
$id=$_GET['id'];
$completedate=$_POST["completedate"];
$status=$_POST["needbloodstatus"];





$q="UPDATE `needblood` SET `completeDate`='$completedate', `status`='$status' WHERE id=$id";

$result=mysqli_query($con,$q);

// echo "success";
header("location:../view/viewneedblood.php?id=$id");

}
catch(Exception $e){
	throw $e;
}

?>