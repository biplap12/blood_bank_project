<?php 
session_start();
require "../database/dbConnect.php";
$email = "";
$name = "";
$errors = array();


    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM tbl_user WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE tbl_user SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $senderName="Blood Bank";
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: $senderName blood.bank.nepal11@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a password reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM tbl_user WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
            
        }
       else if (strlen($password) < 8) {
            $errors['password'] = "Password must be at least 8 characters long.";
        }

        else if (!preg_match('/[A-Z]/', $password)) {
            $errors['password'] = "Password must contain at least one uppercase letter.";
        }
        else if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {
    $errors['password'] = "Password must contain at least one special character.";
    }
    else if (!preg_match('/\d/', $password)) {
    $errors['password'] = "Password must contain at least one number.";
    }
    else{
    $code = 0;
    $email = $_SESSION['email']; //getting this email using session
    // $encpass = password_hash($password, PASSWORD_BCRYPT);
    $update_pass = "UPDATE tbl_user SET code = $code, password = '$password' WHERE email = '$email'";
    $run_query = mysqli_query($con, $update_pass);
    if($run_query){
    $info = "Your password changed. Now you can login with your new password.";
    $_SESSION['info'] = $info;
    header('Location: password-changed.php');
    }else{
    $errors['db-error'] = "Failed to change your password!";
    }
    }
    }

    //if login now button click
    if(isset($_POST['login-now'])){
    header('Location:../login/loginForm.php');
    }
    ?>