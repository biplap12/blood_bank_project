<?php

include "../database/dbConnect.php";
include "../header/header.php";
include "../admin/admin.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo Time()?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

</head>

<body>
    <div class="bloodGroup">
        <h1>Blood Add</h1>
        <form method="POST" id="bloodAdd">
            <div class="form-group">
                <label for="name">Blood Group:</label>
                <input type="text" id="bloodGroup" name="bloodGroup" required title="Please enter valid BloodGroup">
                <button type="submit" name="bloodAddBtn" class="bloodAddBtn">Add</button>
            </div>
        </form>
        <div id="loader" style=" display: none;">
            <div class="loading">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>


        <script type="text/javascript">
        $(document).ready(function() {});
        $("#bloodAdd").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "../savedata/BloodGroupAdd.php",
                type: "post",
                data: new FormData(this),
                timeout: 20000,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#bloodAdd").show();
                    $("#loader").show();


                },
                success: function(response, data, status) {
                    $("#loader").hide();
                    swal({
                        title: "Success!",
                        text: "Blood Group Add Successfully!",
                        icon: "success"
                    }).then(function() {

                        window.location.href = "../admin/dashboard.php";
                    });

                },
                error: function(xhr, data, status) {
                    $("#loader").hide();
                    $("#error-msg").html(data);
                    $("#error-msg").show();

                    swal({
                        title: "Error!",
                        text: "Something went Wrong",
                        icon: "error"
                    }).then(function() {
                        // Redirect to the homepage
                        location.replace("./addBloodGroup.php")
                    });



                }

            });

        });
        </script>

</body>

</html>