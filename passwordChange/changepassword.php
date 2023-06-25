<?php 
include "../database/dbConnect.php";
include "../header/header.php";

$id = $_GET['id'];
$password = $_POST['password'];

$q = "UPDATE `tbl_user` SET `password`='$password' WHERE id='$id'";
$result = mysqli_query($con, $q);

sleep(0);
?>