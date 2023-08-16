<?php
include "../database/dbConnect.php";
$id = $_GET["id"];

// Update the status to "active" in the backend database
$updateQuery = "UPDATE `donors` SET `status`='Active' WHERE id=$id";
mysqli_query($con, $updateQuery);

// mail
$query = "SELECT * FROM `donors` WHERE id=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$email=$row['email'];
$donorname=$row['fullname'];
$to = $email;
$subject = "Donor has been Active";
$body = "

Dear $donorname,\n\nWe sincerely appreciate your ongoing commitment as an active donor of Blood Bank.
Your dedication has helped us achieve significant milestones and make real change. Your involvement is
vital, and we're excited about the impact we can create together. If you'd like to learn more about our
blood bank or explore additional ways to contribute, please contact us at 9812345678.

Thank you for being a driving force for positive transformation!\n\nBest regards,\nBlood Bank\nwww.bloodbank.org.np
";

$from ="blood.bank.nepal11@gmail.com";
$senderName="Blood Bank";
$headers = "From:$senderName  $from";

if (mail($to, $subject, $body, $headers)) {
    echo "Email successfully sent";
} else {
    echo "Email sending failed";
}


// Redirect back to the viewdonor.php page
header("location:../view/viewdonor.php?id=$id");

?>