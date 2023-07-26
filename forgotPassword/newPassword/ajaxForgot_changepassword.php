<?php 
session_start();
 require "../../database/dbConnect.php";
$email = "";
$name = "";
$errors = array();

 if(isset($_POST['change-password'])){
    $_SESSION['info'] = "";
    $password =  $_POST['new_password'];
    $cpassword =  $_POST['confirm_password'];
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }else{
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass = $password;
        $update_pass = "UPDATE tbl_user SET code = $code, password = '$encpass' WHERE email = '$email'";
        $run_query = mysqli_query($con, $update_pass);
        if($run_query){
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location:../../login/loginForm.php');
        }else{
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}


?>