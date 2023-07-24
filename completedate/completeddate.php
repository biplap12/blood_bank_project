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


$query = "SELECT * FROM needblood WHERE id=$id";
$result = mysqli_query($con, $query);


$row = mysqli_fetch_assoc($result);
$email = $row['email'];
$patientname=$row['patientname'];
$bloodGroup=$row['bloodgroup'];
$unitofblood=$row['unitofblood'];
$requiredate=$row['requiredate'];

// mail
$to = "$email";
$subject = "Blood Request $status";
$body = "
Dear $patientname,

Thank you for reaching out to us for your blood requirement. We have received your blood request, and we are committed to assisting you during this time.

Request Details:
Recipient's Name: $patientname
Blood Group Requested: $bloodGroup
Number of Units Required: $unitofblood
Required Date: $requiredate

Our dedicated team is actively working to arrange the necessary blood units matching your requirements. We understand the urgency, and you can rest assured that we will do our utmost to provide the needed support.

We kindly request you to be available and prepared for the blood donation process on the specified required date. Our team will be in touch with you to finalize the donation procedure and location.

In the meantime, if there are any changes or additional information you would like to provide, please feel free to contact us.

Once again, thank you for choosing us for your blood requirements. Together, we can make a significant difference in saving lives.

Best regards,
Blood Bank Biplap";
$from ="aaagamming111@gmail.com";
$headers = "From: $from";

if (mail($to, $subject, $body, $headers)) {
    echo "Email successfully sent to $to...";
} else {
    echo "Email sending failed...";
}

}
catch(Exception $e){
	throw $e;
}

?>