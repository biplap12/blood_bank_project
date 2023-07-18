



$(document).ready(function() {});
$("#bloodBankForm").submit(function(e) {
    e.preventDefault();

    $.ajax({
        url: "login.php",
        type: "post",
        data: new FormData(this),
        timeout: 100000,
        processData: false,
        contentType: false,
        beforeSend: function() {
            $("#bloodBankForm").show();
            $("#loader").hide();
        },
        success: function(response, data, status) {
            // $.cookie("fromlogin", 1);
            const Toast = Swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Loged in successfully'
            }).then(function() {
                // Redirect to the homepage
                location.replace("../admin/dashboard.php");
            });

        },
        error: function(xhr, data, response, status) {
            $("#error-msg").html(xhr.responseText);
            $("#error-msg").show();
            const Toast = Swal.mixin({
                toast: true,
                position: 'top',
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
                title: 'Error to Log in'
            // }).then(function() {
            //     // Redirect to the homepage
            //     location.replace("../login/loginForm.php");
            });

        },

    });

});
