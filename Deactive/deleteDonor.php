<?php
include "../database/dbConnect.php";

try {
  $id = $_POST['id'];

  $query = "SELECT * FROM `donors` WHERE id = $id AND status = 'Pending'";
  $result = mysqli_query($con, $query);
  
  if (mysqli_num_rows($result) > 0) {
    $deleteQuery = "DELETE FROM `donors` WHERE id = $id";
    $deleteResult = mysqli_query($con, $deleteQuery);

    if ($deleteResult) {
      echo "success";
    } else {
      echo "error";
    }
  } else {
    echo "error";
  }
} catch (Exception $e) {
  echo "error";
}
?>