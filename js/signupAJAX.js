

// $(document).ready(function() {});
// $("#bloodBankForm").submit(function(e) {
//     e.preventDefault();

//     $.ajax({
//         url: "../savedata/saveuser.php",
//         type: "post",
//         data: new FormData(this),
//         timeout: 20000,
//         processData: false,
//         contentType: false,
//         beforeSend: function() {
//             $("#bloodBankForm").show();
//             $("#loader").show();


//         },
//         success: function(response, data, status) {
//             $("#loader").hide();
//             //  $("#success-msg").html(data);
//             //  $("#success-msg").show();
//             swal({
//                 title: "Success!",
//                 text: "Signin successfull",
//                 icon: "success"
//             }).then(function() {
//                 // Redirect to the homepage
//                 window.location.href = "../login/loginForm.php";
//             });



//         },
//         error: function(xhr, data, status) {
//             $("#loader").hide();
//             $("#error-msg").html(data);
//             $("#error-msg").show();
//             // location.replace("../update/updateUserByAdmin.php")
//             // swal("Success!", "Form updated successfully!", "success"); 
//             swal({
//                 title: "Error!",
//                 text: "Something went Wrong",
//                 icon: "error"
//             }).then(function() {
//                 // Redirect to the homepage
//                 location.replace("../signup/signup.php")
//             });



//         }

//     });

// });



$(document).ready(function() {
    $("#bloodBankForm").submit(function(e) {
        e.preventDefault();
        
        // Perform form validation before submitting the data
        var password = $("#Current_password").val();
        var phoneNumber = $("#pnforsignin").val();
        var name = $("#nameforsignin").val();

        // Password validation: at least 8 characters, one uppercase, one number, one special character
        // var passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        // if (!passwordRegex.test(password)) {
        //     swal({
        //         title: "Error!",
        //         text: "Password must be at least 8 characters long and include one uppercase letter, one number, and one special character.",
        //         icon: "error"
        //     });
        //     return;
        // }

        

        // Password validation
        var hasValidLength = password.length >= 8;
        var hasSpecialChar = /[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]+/.test(password);
        var hasNumber = /\d/.test(password);
        var hasUppercase = /[A-Z]/.test(password);
    
        // Check if the password meets the validation requirements
        if (!hasValidLength || !hasSpecialChar || !hasNumber || !hasUppercase) {
            // Display an error message or take appropriate action
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

        
        
        // If password validation passes, continue with the AJAX request
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
                $("#error-msg").html(data);
                $("#error-msg").show();
                swal({
                    title: "Error!",
                    text: "Something went wrong",
                    icon: "error"
                }).then(function() {
                    // Redirect to the signup page
                    location.replace("../signup/signup.php");
                });
            }
        });
    });
});
