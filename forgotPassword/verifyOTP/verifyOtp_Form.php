<?php

// include "../database/dbConnect.php";
// include "../header/header.php";
// session_start(); 
// $uid=$_GET['id'];
// $q="SELECT * FROM `tbl_user` WHERE id=$uid";
// $result=mysqli_query($con,$q);
// $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// $otp=$_SESSION['otp'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style.css?v=<?php echo Time();?>">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</head>

<body>

    <form method="post" id="sendOtp" action="../verifyOTP/ajaxVerifyOtp.php">
        <div class="box-form">
            <div class="closeButtonInSigninSignup"><a href="../../login/loginForm.php"><i
                        class="fa-solid fa-circle-xmark"></i></a>
            </div>
            <div class="left">
                <div class="overlay">
                    <h1>Blood Bank</h1>
                </div>
            </div>
            <div class="right">
                <div class="changePasswordTitle">Forgot Password</.>

                    <div class="login_inputs">


                        <input type="number" name="otp" id="otpVerify" placeholder="Verify Your otp">

                    </div>
                    <br>
                    <button type="submit" class="submitBtn" name="check-reset-otp" id="updatebtn">Verify Otp</button>
                </div>
    </form>
    <div id="loader" style="display:none;">
        <div class="loading">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>



    <!-- 


    <script type="text/javascript">
    $(document).ready(function() {});
    $("#sendOtp").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "ajaxVerifyOtp.php",
            type: "post",
            data: new FormData(this),
            timeout: 20000,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $("#sendOtp").show();
                $("#loader").show();
            },
            success: function(response, data, status) {
                $("#loader").hide();
                swal({
                    title: "Success!",
                    text: "OTP verify Successful",
                    icon: "success"
                }).then(function() {
                    // Redirect to the homepage
                    window.location.href = "./password_change_form.php";
                });
            },
            error: function(xhr, data, status) {
                $("#loader").hide();
                swal({
                    title: "Error!",
                    text: "Failed to verify otp. Please try again later !",
                    icon: "error"

                });
            },
        });
    });
    </script> -->