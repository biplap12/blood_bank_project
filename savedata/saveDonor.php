<?php
try{
 


$fullname=$_POST['fullname'];
$gender=$_POST['gender'];
$bloodGroup=$_POST['bloodGroup'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$birthdate=$_POST['birthdate'];
$donor=$_POST['donor'];
$ihaveread=$_POST['ihaveread'];
$iagree=$_POST['iagree'];
$donorRegisterDate=$_POST['donorRegisterDate'];
$status="Pending";



// move_uploaded_file($_FILES['uploadphoto']['tmp_name'],"../img/donor_images/$uploadphoto");//uploading files in server

$q="INSERT INTO `donors`(`fullname`, `gender`, `bloodgroup`, `address`, `email`, `phone`, `birthdate`, `newdonor`, `ihaveread`, `iagree`,`donorRegisterDate`, `status`) VALUES ('$fullname','$gender','$bloodGroup','$address','$email','$phone','$birthdate','$donor','$ihaveread','$iagree','$donorRegisterDate','$status')";


$result=mysqli_query($con,$q);


//insert for blood group
 $bloodgroupQuery="INSERT INTO `bloodgroup`( `Blood_id`, `bloodGroup`) VALUES (1,'$bloodGroup')";
 $result=mysqli_query($con,$bloodgroupQuery);

// mail

$to = $email;
$subject = "Blood Donor Registration Successful";
$body = "

Dear $fullname,

Thank you for registering as a blood donor with our Blood Bank. Your willingness to donate blood can save lives and make a significant difference for those in need. We truly appreciate your support in our mission to ensure a steady supply of blood for patients in critical conditions.

Donor Details:
Name: $fullname
Date of Birth: $birthdate
Blood Group: $bloodGroup
Gender: $gender
Contact Number: $phone
Email: $email
Address: $address

Your registration has been successfully recorded in our donor database. You are now part of our blood donor community, and we will contact you whenever there is a requirement that matches your blood group and eligibility.

As a registered donor, you have the power to positively impact the lives of those facing medical emergencies. Your act of kindness can bring hope and healing to those in distress.

Please note that the information you have provided will be kept confidential and used only for blood donation-related purposes.

If you have any questions or need to update your details in our records, please feel free to contact us at 980000000.

Once again, thank you for your generosity and compassion. Together, we can make a positive impact on the lives of others.

Best regards,
Blood Bank
980000000
www.bloodbank.org.np";
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