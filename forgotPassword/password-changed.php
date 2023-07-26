<?php require_once "controllerUserData.php"; ?>
<?php
if($_SESSION['info'] == false){
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

                <div class="login_inputs">
                    <div class="password_change-success">
                        <?php 
            if(isset($_SESSION['info'])){
                ?>
                        <div class="success-msg">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
            }
            ?>
                    </div>
                </div>
                <br><br><br><br><br />
                <form action="../login/loginForm.php" method="POST">

                    <button type="submit" class="submitBtn" name="login-now" value="">Login Now</button>
            </div>
        </div>
    </form>
    </div>

    </form>
    </div>
    </div>
    </div>

</body>

</html>