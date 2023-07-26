<?php

session_start();
include "../../database/dbConnect.php";
$email = "";
$name = "";
$errors = array();

try {
    //code...

   
    if(isset($_POST['check-email'])){
        $email =$_POST['email'];
        $check_email = "SELECT * FROM tbl_user WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE tbl_user SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: aaagamming111@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location:../verifyOTP/verifyOtp_Form.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
            // header('location:forgotPassword.php');

        }
    }
} catch (\Throwable $th) {
    throw $th;
}
   

    
 
?>