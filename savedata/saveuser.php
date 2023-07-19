<?php
try {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $signUpDate=$_POST['signUpDate'];
    $status = "Pending";
    
    // Connection
    include "../database/dbConnect.php";
    
    // Check if the username already exists
    $checkQuery = "SELECT * FROM `tbl_user` WHERE `username` = '$username'";
    $checkResult = mysqli_query($con, $checkQuery);
    if (mysqli_num_rows($checkResult) > 0) {
        http_response_code(409); // Conflict status code
        $response = array("error" => "DuplicateUsername");
        echo json_encode($response);
        exit();
    }
    
    // Insert the data if it doesn't exist
    $insertQuery = "INSERT INTO `tbl_user` (`signUpDate` , `name`, `phone`, `email`, `username`, `password`, `status`) VALUES ('$signUpDate','$name', '$phone', '$email', '$username', '$password', '$status')";
    $result = mysqli_query($con, $insertQuery);
    
    if ($result) {
        echo "Success";
        sleep(2);
    } else {
        echo "Error inserting data";
    }
} catch (Exception $e) {
    throw $e;
}

?>