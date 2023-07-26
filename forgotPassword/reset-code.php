<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: ../login/loginForm.php');
}
?>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</head>

<body>

    <form method="post" id="sendOtp" action="reset-code.php">
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
                <div class="changePasswordTitle">Forgot Password</.>
                </div>
                <div class="login_inputs">
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                    <div class="info-msg">
                        <?php echo $_SESSION['info']; ?>
                    </div>
                    <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                    <div class="error-msg ">
                        <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                    </div>
                    <?php
                    }
                    ?>

                    <input type="number" name="otp" placeholder="Enter code" required>

                </div>
                <br>
                <div class="closeButtonInSigninSignupSmallScreen"><a href="../login/loginForm.php"><i
                            class="fa fa-arrow-left" style="font-size: 20px; color: black; "></i></a>
                </div>
                <button type="submit" class="submitBtn" name="check-reset-otp" id="updatebtn">Verify</button>

            </div>
    </form>

    </div>
    </div>
    </div>

</body>

</html>