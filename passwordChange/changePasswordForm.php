<?php
$id=$_GET['id'];
include "../database/dbConnect.php";
// include "../header/header.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Use the $id variable for further processing
    // ...
}
$q="SELECT * FROM `tbl_user`Where id='$id'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);



?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Page</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css?v=<?php echo Time();?>">


    <script src="../js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="loader.css?v=<?php echo Time();?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>



</head>

<body>




    <form method="post" id="bloodBankForm">
        <div class="box-form">
            <div class="closeButtonInSigninSignup"><a href="../displaydata/displayuser.php"><i
                        class="fa-solid fa-circle-xmark"></i></a>
            </div>
            <div class="left">
                <div class="overlay">
                    <h1>Blood Bank</h1>
                </div>
            </div>
            <div class="right">
                <h5>changepassword</h5>
                <!-- <p class="signupRedirect">Already have an account? Login Your
                        Account</a> it takes less than a
                    minute
                </p> -->
                <div class="login_inputs">


                    <input type="password" name="password" id="Current_password" placeholder="Password"
                        value="<?php echo $row["password"] ?>">
                    <button type="button" id="passwordShowHide" onclick="showPassword()">
                        <i class="fas fa-eye"></i></button>
                </div>
                <br>
                <button type="submit" class="submitBtn" id="updatebtn">Update</button>
            </div>
            <input type="hidden" id="id" name="id" value="<?php echo $row["id"]?>">
    </form>
    <div id="loader" style=" display: none; ">
        <div class="loading">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="error-msg" style=" color: red; display: none; "></div>

    <div id="success-msg"></div>


    </div>
    </div>



    <script type="text/javascript">
    $(document).ready(function() {});
    $("#bloodBankForm").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "../passwordChange/changepassword.php",
            type: "post",
            data: new FormData(this),
            timeout: 10000,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $("#bloodBankForm").show();
                $("#loader").show();


            },
            success: function(response, data, status) {
                $("#loader").hide();
                //  $("#success-msg").html(data);
                //  $("#success-msg").show();
                swal({
                    title: "Success!",
                    text: "Update successful",
                    icon: "success"
                }).then(function() {
                    // Redirect to the homepage
                    window.location.href = "../displaydata/displayuser.php";
                });



            },
            error: function(xhr, data, status) {
                $("#loader").hide();
                $("#error-msg").html(data);
                $("#error-msg").show();
                // location.replace("../update/updateUserByAdmin.php")
                // swal("Success!", "Form updated successfully!", "success"); 
                swal({
                    title: "Error!",
                    text: "Something went Wrong",
                    icon: "error"
                }).then(function() {
                    // Redirect to the homepage
                    location.replace("../update/updateUserByAdmin.php")
                });



            }

        });

    });

    function showPassword() {
        let password = document.getElementById("Current_password");
        var button = document.getElementById("passwordShowHide")[0];
        if (password.type === "password") {
            password.type = "text";
            passwordShowHide.innerHTML = "<i class='fas fa-eye-slash'></i>";
            passwordShowHide.style.backgroundRepeat = "no-repeat";
            passwordShowHide.style.backgroundPosition = "center";
        } else {
            password.type = "password";
            passwordShowHide.innerHTML = "<i class='fas fa-eye'></i>";
            passwordShowHide.style.backgroundRepeat = "no-repeat";
            passwordShowHide.style.backgroundPosition = "center";
        }

    }
    </script>
    <!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#changePasswordForm').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        var oldPassword = $('#password').val();
        var newPassword = $('#newpassword').val();
        var confirmPassword = $('#confirm_password').val();

        // Validate if the new passwords match
        if (newPassword !== confirmPassword) {
            swal("Error!", "New passwords do not match.", "error");
            return; // Exit the function if passwords don't match
        }

        // Make the AJAX request
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: {
                oldPassword: oldPassword,
                newPassword: newPassword
            },
            beforeSend: function() {
                $('#loader').show();
            },
            success: function(response) {
                // Handle the success response
                swal({
                    title: "Success!",
                    text: "Password changed successfully",
                    icon: "success"
                }).then(function() {
                    // Redirect to the homepage
                    window.location.href = "../index/index.php";
                });
            },
            error: function(xhr, status, error) {
                // Handle the error response
                swal("Error!", "An error occurred: " + error, "error");
            },
            complete: function() {
                $('#loader').hide();
            }
        });
    });
});
</script> -->