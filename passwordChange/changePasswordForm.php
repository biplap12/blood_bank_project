<?php
$id=$_GET['id'];
include "../database/dbConnect.php";
include "../header/header.php";


$q="SELECT * FROM `tbl_user` WHERE id=$id ";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);



?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>


<form method="POST" id="changePasswordForm" action="../passwordChange/changepassword.php">
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>Blood Bank</h1>
            </div>
        </div>
        <div class="right">
            <h5></h5>
            <div class="login_inputs">
                <input type="text" name="password" id="password" placeholder="Old Password"
                    value="<?php echo $row['password']; ?>">
                <input type="password" name="newpassword" id="newpassword" placeholder="New Password">
                <input type="password" name="confirmassword" id="confirm_password" placeholder="Confirm New Password">
                <button type="button" id="passwordShowHide" onclick="showPassword()">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <br>
            <button type="submit" class="submitBtn" id="updatebtn">Update</button>
        </div>
    </div>
</form>

<div id="loader" style="display: none;">

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
</script>