<?php 
session_start();

$username = "";
$password = "";
if(isset($_COOKIE['username'])){
    $username=$_COOKIE['username'];
}

if (isset($_COOKIE['password'])){
    $password=$_COOKIE['password'];

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../style.css?v=<?php echo Time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="../js/jquery_cookie.js"></script>
    <script src=" ../js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />



</head>

<body>
    <div class="login_form_main">
        <form method="post" id="bloodBankForm">
            <div class="closeButtonInSigninSignup"><a href="../Client/index.php"><i
                        class="fa-solid fa-circle-xmark"></i></a>
            </div>
            <div class="box-form">
                <div class="left">
                    <div class="overlay">
                        <h1>Blood Bank</h1>

                    </div>
                </div>
                <div class="right">
                    <h5>Login</h5>
                    <p class="signupRedirect">Don't have an account? <a href="../signup/signup.php">Create Your
                            Account</a> it takes less than a minute.</p>

                    <div class="login_inputs">
                        <input type="text" name="username" placeholder="UserName" value="<?php echo $username ?>"
                            required>
                        <button type="button"><i class="fa-solid fa-user"></i></button>
                        <input type="password" name="password" id="Current_password" placeholder="Password"
                            value="<?php echo $password?>" required>
                        <button type="button" id="passwordShowHide" onclick="showPassword()">
                            <i class="fas fa-eye"></i></button>
                    </div>
                    <br>
                    <div class="remember-me--forget-password">
                        <label class="stylish_checkbox">
                            <input type="checkbox" name="remember_user" id="remember_user" />
                            <span id="Remember_user_text" class="text-checkbox">Remember me</span>
                        </label>
                        <p> <a href="#">forget password?</a></p>
                    </div>
                    <br>
                    <div class="closeButtonInSigninSignupSmallScreen"><a href="../Client/index.php"><i
                                class="fa fa-arrow-left" style="font-size: 20px; color: black; "></i></a>
                    </div>
                    <button class="submitBtn" type="submit">Login</button>
                </div>

            </div>
        </form>



    </div>
    </div>
    <div class="error-msg" id="error-msg" style="Display:none;">
    </div>

    <!-- 


    <script type="text/javascript">
    $(document).ready(function() {});
    $("#bloodBankForm").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "login.php",
            type: "post",
            data: new FormData(this),
            timeout: 100000,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $("#bloodBankForm").show();
                $("#loader").hide();
            },
            success: function(response, data, status) {
                // $.cookie("fromlogin", 1);
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Loged in successfully'
                }).then(function() {
                    // Redirect to the homepage
                    location.replace("../index/index.php");
                });

            },
            error: function(xhr, data, response, status) {
                $("#error-msg").html(xhr.responseText);
                $("#error-msg").show();
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'error',
                    title: 'error to Log in'
                }).then(function() {
                    // Redirect to the homepage
                    location.replace("../login/loginForm.php");
                });

            },

        });

    });
    </script> -->

    <?php
            if(isset($_SESSION['errorMsg'])){?>
    <div class="error-msg" style="display:block"><?php echo $_SESSION['errorMsg'];?></div>
    <?php 
        unset($_SESSION['errorMsg']);

            }
            ?>
    </div>

    <script>
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
    <script src="../js/rememberUser.js"></script>
    <!-- <script src="../js/passwordShowHide.js"></script> -->
    <script src="../js/loginformAJAX.js"></script>