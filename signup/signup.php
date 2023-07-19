<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Page</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <script src="../js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>




    <form method="post" id="bloodBankForm">
        <div class="box-form">
            <div class="closeButtonInSigninSignup"><a href="../login/loginForm.php"><i
                        class="fa-solid fa-circle-xmark"></i></a>
            </div>
            <div class="left">
                <div class="overlay">
                    <h1>Blood Bank</h1>
                </div>
            </div>
            <div class="right">
                <h5>SignUP</h5>
                <p class="signupRedirect">Already have an account? <a href="../login/loginForm.php">Login Your
                        Account</a> it takes less than a
                    minute
                </p>
                <div class="login_inputs">
                    <input type="hidden" name="signUpDate" value="<?php echo date('Y/m/d-H:i');?>">
                    <input type="text" name="name" placeholder="Name" pattern="[A-Za-z ]{3,50}" id="nameforsignin"
                        title="Please enter your full name" required>
                    <input type="tel" name="phone" placeholder="98XXXXXXXX" pattern="[0-9]{10}" id="pnforsignin"
                        required>

                    <input type="email" name="email" placeholder="Email" id="emailforsignin" required>
                    <input type="text" name="username" placeholder="UserName" id="usernameforsignin" required>
                    <input type="password" name="password" id="Current_password" placeholder="Password" required>
                    <button type="button" id="passwordShowHide" onclick="showPassword()">
                        <i class="fas fa-eye"></i></button>
                </div>
                <br>
                <div class="closeButtonInSigninSignupSmallScreen"><a href="../login/loginForm.php"><i
                            class="fa fa-arrow-left" style="font-size: 20px; color: black; "></i></a>
                </div>
                <button class="submitBtn" type="submit">Sign UP</button>
            </div>

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

    </div>

    </div>
    </div>

    <script>
    // $(document).ready(function() {
    //     $(".submitBtn").prop("disabled", true);
    // });

    // $("#usernameforsignin").on('keyup', function() {

    //     var name = $(this).val();
    // });
    </script>


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

    <script src="../js/signupAJAX.js"></script>

    <!-- 
    <script>
    function validateForm() {
        let name = document.getElementById("nameforsignin").value;
        let pattern = /[^ a-z || A-Z]/i;
        let result = pattern.test(name);
        console.log(name);
        if (name == "") {
            name.style = "border-bottom:2px solid red"
        }
    }
    </script> -->