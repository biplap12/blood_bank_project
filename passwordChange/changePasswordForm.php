<?php include "../database/dbConnect.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
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




    <form method="post" id="changePasswordForm">
        <div class="box-form">
            <div class="closeButtonInSigninSignup"><a href="../index/index.php"><i
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

                    <input type="hidden" id="password" value="<?php echo $row['password']; ?>">
                    <input type="password" name="current_password" id="current_password" placeholder="Current Password">
                    <input type="password" name="new_password" id="new_password" placeholder="New Password">
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">

                </div>
                <br>
                <button type="submit" class="submitBtn" id="updatebtn">Change</button>
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




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#changePasswordForm').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            var oldPassword = $('#current_password').val();
            var newPassword = $('#new_password').val();
            var confirmPassword = $('#confirm_password').val();

            // Check if any of the fields are empty
            if (oldPassword === '' || newPassword === '' || confirmPassword === '') {
                swal("Error!", "Please fill in all fields.", "error");
                return;
            }

            // Validate if the new passwords match
            if (newPassword !== confirmPassword) {
                swal("Error!", "New passwords do not match.", "error");
                return;
            }

            // Validate if the old password matches the stored password
            var storedPassword = "<?php echo $row['password']; ?>";
            if (oldPassword !== storedPassword) {
                swal("Error!", "Current password is incorrect.", "error");
                return;
            }

            // Validate the new password against the specified requirements
            var passwordRegex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
            if (!passwordRegex.test(newPassword)) {
                swal(
                    "Error!",
                    "Password must be at least 8 characters long and contain at least 1 capital letter, 1 special character, and 1 number.",
                    "error"
                );
                return;
            }

            // Make the AJAX request
            $.ajax({
                url: "changepassword.php",
                type: 'POST',
                data: {
                    oldPassword: oldPassword,
                    new_password: newPassword
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
    </script>