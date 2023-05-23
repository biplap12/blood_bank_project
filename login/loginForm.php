<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">


    <script src="../js/jquery_cookie.js"></script>
    <script src=" ../js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

</head>

<body>
    <div class="login_form_main">
        <form method="post" id="bloodBankForm">
            <div class="box-form">
                <div class="left">
                    <div class="overlay">
                        <h1>Blood Bank</h1>
                        <span>
                            <h2>Login with social media</h2>
                            <a href="#">Facebook</a>
                            <a href="#">Twitter</a>
                        </span>
                    </div>
                </div>
                <div class="right">
                    <h5>Login</h5>
                    <p>Don't have an account? <a href="../signup/signup.php">Creat Your Account</a> it takes less
                        than a
                        minute
                    </p>
                    <div class="login_inputs">
                        <input type="text" name="username" placeholder="UserName" required>
                        <br>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>

                    <br><br>

                    <div class="remember-me--forget-password">
                        <label class="stylish_checkbox">
                            <input type="checkbox" />
                            <span class="text-checkbox">Remember me</span>
                        </label>
                        <p> <a href="#">forget password?</a></p>
                    </div>
                    <br>
                    <br>
                    <button type="submit">Login</button>
                </div>

            </div>
        </form>

        <div id=" loader" class="lds-spinner" style="Display:none;">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

    </div>
    </div>
    <div class="error-msg" id="error-msg" style="Display:none;">
    </div>




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
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Loged in successfully'
                })
                location.replace("../index/index.php");
            },
            error: function(xhr, data, response, status) {
                $("#error-msg").html(xhr.responseText);
                $("#error-msg").show();
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'error',
                    title: 'error to Log in'
                })

            },

        });

    });
    </script>
    <?php
            if(isset($_SESSION['errorMsg'])){?>
    <div class="error-msg" style="display:block"><?php echo $_SESSION['errorMsg'];?></div>
    <?php 
        unset($_SESSION['errorMsg']);

            }
            ?>
    </div>