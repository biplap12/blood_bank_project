<?php
include "../database/dbConnect.php";
$id = $_GET["id"];

// Update the status to "pending" in the backend database
$updateQuery = "UPDATE `donors` SET `status`='Pending' WHERE id=$id";
mysqli_query($con, $updateQuery);

// Redirect back to the viewdonor.php page
header("location:../view/viewdonor.php?id=$id");

?>