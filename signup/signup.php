<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign up Page</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <script src="../js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <div id="loader" class="lds-spinner" style="Display:none;">
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

    <div id="error-msg" style="display: none;">
        <!-- <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
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
            title: 'error'
        })
        </script> -->
    </div>
    <div id="success-msg" style="display: none">
        <!-- <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
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
            title: 'login successfully'
        })
        </script> -->
    </div>


    <form method="post" id="bloodBankForm">
        <div class="box-form">
            <div class="left">
                <div class="overlay">
                    <h1>Blood Bank</h1>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			Curabitur et est sed felis aliquet sollicitudin</p> -->
                    <h2>Login with social media</h2>

                    <span>
                        <a href="#"> Facebook</a>
                        <a href="#">Google</a>
                    </span>
                </div>
            </div>
            <div class="right">
                <h5>SignUP</h5>
                <p>Already have an account? <a href="../login/loginForm.php">Login Your Account</a> it takes less than a
                    minute
                </p>
                <div class="inputs">
                    <input type="text" name="name" placeholder="Name">
                    <br>
                    <input type="tel" name="phone" placeholder="Phone Number">
                    <br>
                    <input type="email" name="email" placeholder="Email">
                    <input type="text" name="username" placeholder="UserName">
                    <br>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <br>
                <br>
                <button type="submit">Sign UP</button>
            </div>

    </form>

    </div>

    </div>
    </div>




    <script type="text/javascript">
    $(document).ready(function() {});
    $("#bloodBankForm").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "saveUser.php",
            type: "post",
            data: new FormData(this),
            timeout: 20000,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $("#bloodBankForm").show();
                $("#loader").show();

            },
            success: function(data, status) {
                $("#loader").hide();
                // $("#success-msg").html(data);
                $("#success-msg").show();
                location.replace("../login/loginForm.php");

            },
            error: function(xhr, data, status) {
                // $("#loader").hide();
                // $("#error-msg").html(data);
                $("#error-msg").show();
                location.replace("../signup/signup.php");

            }

        });

    });
    </script>
    <script src="../js/sweetalert.min.js"></script>
</body>

</html>