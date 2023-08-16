<?php

try{

    include "../database/dbConnect.php";
$id=$_GET['id'];
$completedate=$_POST["completedate"];
$status=$_POST["bloodRequeststatus"];

$q="UPDATE `bloodrequest` SET `completeDate`='$completedate', `status`='$status' WHERE id=$id";

$result=mysqli_query($con,$q);

// echo "success";
header("location:../view/viewBloodRequest.php?id=$id");
$q="SELECT b.id,bg.bloodgroup
FROM bloodrequest b
INNER JOIN bloodgroup bg ON b.bloodGroup = bg.blood_grp_id
WHERE b.id=$id";
$result = mysqli_query($con, $q);
$row1 = mysqli_fetch_assoc($result);

$query = "SELECT * FROM `bloodrequest` WHERE id=$id";
$result = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($result);
$email = $row['email'];
$patientname=$row['patientname'];
$bloodGroup=$row1['bloodgroup'];
$unitofblood=$row['unitofblood'];
$requiredate=$row['requiredate'];
$completeDate=$row['completeDate'];

// mail
$to = "$email";

if($status=="Approved"){
$subject = "Blood Request has been Approved";
$body = "
Dear $patientname,

Thank you for reaching out to us for your blood requirement. We have received your blood request, and we are committed to assisting you during this time.

Request Details:
Patient's Name: $patientname
Blood Group Requested: $bloodGroup
Number of Units Required: $unitofblood
Required Date: $requiredate

Our dedicated team is actively working to arrange the necessary blood units matching your requirements. We understand the urgency, and you can rest assured that we will do our best to provide the needed support.

We kindly request you to be available and prepared for the blood donation process on the specified required date. Our team will be in touch with you to finalize the donation procedure and location.

In the meantime, if there are any changes or additional information you would like to provide, please feel free to contact us.

Once again, thank you for choosing us for your blood requirements. Together, we can make a significant difference in saving lives.

Best regards,
Blood Bank
www.bloodbank.org.np";
}else if($status=="Completed"){
    $subject = "Blood Request Completed";
    $body = "Dear $patientname,\n\nWe are pleased to inform you that your blood request has been completed on date $completeDate. You have successfully received the required blood units.\n\nThank you for choosing us for your blood requirements.\n\nBest regards,\n Blood Bank";
    
}
$from ="blood.bank.nepal11@gmail.com";
$senderName="Blood Bank";
$headers = "From:$senderName  $from";

if (mail($to, $subject, $body, $headers)) {
    echo "Email successfully sent";
} else {
    echo "Email sending failed";
}

}
catch(Exception $e){
	throw $e;
}

?>