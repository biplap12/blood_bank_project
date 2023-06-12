

$(document).ready(function() {});
$("#bloodBankForm").submit(function(e) {
    e.preventDefault();

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
            //  $("#success-msg").html(data);
            //  $("#success-msg").show();
            swal({
                title: "Success!",
                text: "Signin successfull",
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
            // location.replace("../update/updateUserByAdmin.php")
            // swal("Success!", "Form updated successfully!", "success"); 
            swal({
                title: "Error!",
                text: "Something went Wrong",
                icon: "error"
            }).then(function() {
                // Redirect to the homepage
                location.replace("../signup/signup.php")
            });



        }

    });

});
