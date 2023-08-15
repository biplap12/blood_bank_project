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

    $cQ = "SELECT * FROM `tbl_user` WHERE `email` = '$email'";
    $cR = mysqli_query($con, $cQ);
    if (mysqli_num_rows($cR) > 0) {
        http_response_code(409); // Conflict status code
        $response = array("error" => "DuplicateEmail");
        echo json_encode($response);
        exit();
    }
    
    // Insert the data if it doesn't exist
    $insertQuery = "INSERT INTO `tbl_user` (`name`,`phone`, `email`, `username`, `password`, `status`,`signUpDate`) VALUES ('$name','$phone', '$email', '$username', '$password', '$status','$signUpDate')";
    $result = mysqli_query($con, $insertQuery);
    
    if ($result) {
        echo "Success";   
$to = "$email";
$subject = "User Registration Successful!";
$body = "
Dear $name,

Congratulations! Your registration with Blood Bank has been successfully completed. Thank you for becoming a valued member of our blood bank community.

Your Registration Details:
Name: $name
Username :$username
Contact Number: $phone
Email: $email

As a registered user, you now have access to various features and benefits, including:

1. Easy appointment scheduling for blood donations.
2. Donors also can request for blood if necessary.

Rest assured that the information you have provided will be kept confidential and used only for blood donation-related purposes.

If you have any questions, need to update your details, or require assistance, please feel free to contact our support team at 9800000000.

Once again, thank you for joining us in our mission to save lives through blood donation.

Best regards,

Blood Bank
980000000
www.bloodbank.org
";
$from ="blood.bank.nepal11@gmail.com";
$senderName="Blood Bank";
$headers = "From:$senderName $from";

if (mail($to, $subject, $body, $headers)) {
    echo "Email successfully sent";
} else {
    echo "Email sending failed";
}
} else {
        echo "Error inserting data";
       
    }
} catch (Exception $e) {
    throw $e;
}

?>