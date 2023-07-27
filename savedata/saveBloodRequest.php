<?php
try{
  

$patientname=$_POST['patientname'];
$bloodgroup=$_POST['bloodgroup'];
$gender=$_POST['gender'];
$unitofblood=$_POST['unitofblood'];
$hospitalNameAddress=$_POST['hospitalNameAddress'];
$reasonforblood=$_POST['reasonforblood'];
$city=$_POST['city'];
$requiredate=$_POST['requiredate'];
$contactname=$_POST['contactname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$current_date_time=$_POST['current_date_time'];
$status="Pending";



include "../database/dbConnect.php";
$q="INSERT INTO `bloodrequest`(`patientname`, `bloodgroup`, `gender`,`unitofblood`,`hospitalNameAddress`, 
`city`,`requiredate`, `contactname`, `email`, `phone`,
 `reasonforblood`,`current_date_time`,`status`) VALUES ('$patientname','$bloodgroup',
 '$gender','$unitofblood','$hospitalNameAddress','$city','$requiredate','$contactname',
 '$email','$phone','$reasonforblood','$current_date_time','$status')";
$result=mysqli_query($con,$q);


// *******mail********


$to = "$email";
$subject = "Blood Request Registration Successful";
$body = "

Dear $patientname,

Thank you for registering your blood request with us. We have received your request for blood donation, and we are committed to providing you with the necessary assistance.

Request Details:
Patient's Name: $patientname
Blood Group: $bloodgroup
Number of Units Required: $unitofblood
Contact Number: $phone
Required Date: $requiredate

Our dedicated team is actively working to arrange the required blood units matching your specifications. We understand the urgency of your request and will do our utmost to provide the needed support.

Please be assured that your request is of the utmost importance to us, and we will keep you informed about the progress.

In the meantime, if there are any changes or additional information you would like to provide, please feel free to contact us.

Thank you for choosing us for your blood requirements. We are here to support you during this critical time.

Best regards,
 Blood Bank
9800000000
";
$from ="blood.bank.nepal11@gmail.com";
$senderName="Blood Bank";
$headers = "From:$senderName $from";

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