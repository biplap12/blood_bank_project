

$(document).ready(function() {
    $("#bloodBankForm").submit(function(e) {
        e.preventDefault();
        
        // Perform form validation before submitting the data
        var password = $("#Current_password").val();
        var phoneNumber = $("#pnforsignin").val();
        var name = $("#nameforsignin").val();
        var username = $("#usernameforsignin").val();
        
        // Password validation
        var hasValidLength = password.length >= 8;
        var hasSpecialChar = /[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]+/.test(password);
        var hasNumber = /\d/.test(password);
        var hasUppercase = /[A-Z]/.test(password);
    
        // Check if the password meets the validation requirements
        if (!hasValidLength || !hasSpecialChar || !hasNumber || !hasUppercase) {
            swal("Error!", "Password must be at least 8 characters long and contain at least one special character, one number, and one uppercase letter.", "error");
            return; // Stop form submission
        }

        // Phone number validation: 10 digits
        var phoneNumberRegex = /^\d{10}$/;
        if (!phoneNumberRegex.test(phoneNumber)) {
            swal({
                title: "Error!",
                text: "Phone number must be 10 digits.",
                icon: "error"
            });
            return;
        }

        // Name validation: only characters
        var nameRegex = /^[A-Za-z ]+$/;
        if (!nameRegex.test(name)) {
            swal({
                title: "Error!",
                text: "Name must contain only characters.",
                icon: "error"
            });
            return;
        }
        
        // If all validations pass, continue with the AJAX request
        $.ajax({
            url: "../savedata/saveuser.php",
            type: "post",
            data: new FormData(this),
            timeout: 20000,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $("#bloodBankForm").show();
                $("#loader").show();
            },
            success: function(response, data, status) {
                $("#loader").hide();
                swal({
                    title: "Success!",
                    text: "Signin successful",
                    icon: "success"
                }).then(function() {
                    // Redirect to the homepage
                    window.location.href = "../login/loginForm.php";
                });
            },
            error: function(xhr, data, status) {
                $("#loader").hide();
                var responseText = JSON.parse(xhr.responseText);
                if (responseText.error === "DuplicateUsername") {
                    swal({
                        title: "Error!",
                        text: "Username already exists!",
                        icon: "error"
                    });
                } else {
                    swal({
                        title: "Error!",
                        text: "Something went wrong",
                        icon: "error"
                    });
                }
            }
        });
    });
});
