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



</head>

<body>

    <form method="post" id="forgot_changePasswordForm" action="new-password.php">

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
                <div class="changePasswordTitle">Change Password</.>
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
                    <div class="error-msg">
                        <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                    </div>
                    <?php
                    }
                    ?>

                    <input type="password" name="password" id="new_password" placeholder="New Password" required>
                    <button type="button" class="passwordShowHide" onclick="togglePasswordVisibility('new_password')">
                        <i class="fas fa-eye"></i>
                    </button>
                    <input type="password" name="cpassword" id="confirm_password" placeholder="Confirm Password"
                        required>
                    <button type="button" class="passwordShowHide"
                        onclick="togglePasswordVisibility('confirm_password')">
                        <i class="fas fa-eye"></i></button>

                </div>

                <br>
                <button type="submit" class="submitBtn" name="change-password" id="updatebtn">Change Password</button>
            </div>
    </form>
    <script>
    function togglePasswordVisibility(inputId) {
        var input = document.getElementById(inputId);
        var button = input.nextElementSibling;

        if (input.type === "password") {
            input.type = "text";
            button.innerHTML = "<i class='fas fa-eye-slash'></i>";
        } else {
            input.type = "password";
            button.innerHTML = "<i class='fas fa-eye'></i>";
        }
    }
    </script>

    </div>
    </div>

    </div>
    </div>
    </div>

</body>

</html>