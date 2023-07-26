<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css?v=<?php echo Time();?>">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


</head>

<body>

    <form method="post" id="forgotPassword" action="forgot-password.php" autocomplete="">
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
                <div class="changePasswordTitle">Forgot Password
                </div>
                <div class="login_inputs">
                    <?php
                        if(count($errors) > 0){
                            ?>
                    <div class="error-msg">
                        <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                    </div>
                    <?php
                        }
                    ?>
                    <input type="email" name="email" placeholder="Enter email address" required
                        value="<?php echo $email ?>">
                </div>
                <br>
                <div class="closeButtonInSigninSignupSmallScreen"><a href="../login/loginForm.php"><i
                            class="fa fa-arrow-left" style="font-size: 20px; color: black; "></i></a>
                </div>
                <button type="submit" class="submitBtn" name="check-email" id="updatebtn">Send Otp</button>
            </div>
    </form>
    </div>
    </div>
    </div>

</body>

</html>