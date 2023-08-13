<?php
 include("../database/dbConnect.php");


try{
 


$bloodGroup =$_POST['bloodGroup'];

$checkQuery = "SELECT * FROM `bloodgroup` WHERE `bloodGroup` = '$bloodGroup'";
    $checkResult = mysqli_query($con, $checkQuery);
    if (mysqli_num_rows($checkResult) > 0) {
        http_response_code(409); 
        $response = array("error" => "AlreadyExists");
        echo json_encode($response);
        exit();
    }



$q="INSERT INTO `bloodgroup`( `bloodGroup`) VALUES ('$bloodGroup');";


$result=mysqli_query($con,$q);
sleep(1);
}
catch(Exception $e){
	throw $e;
}

?>