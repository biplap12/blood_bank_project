<?php
 include "../header/header.php";
include "../admin/admin.php";
include "../database/dbConnect.php";

 


?>

<div class="adminContent">
    <h1><i class="fa-solid fa-users"></i>All Donors</h1>
    <hr>
    <div class="main-content">
        <div class="title">Donors</div>
        <div class="content">
            <table class="message-table">

                <script type="text/javascript">
                $(document).ready(function() {


                    $.ajax({
                        url: "../getdata/getAllDonor.php",
                        type: "post",
                        // timeout: 10000,

                        beforeSend: function() {
                            $("#loader").show();
                        },
                        success: function(data, status) {
                            $("#loader").hide();
                            $(".message-table").html(data);

                        },
                        error: function(xhr, data, status) {
                            $("#loader").hide();

                        }

                    });
                })
                </script>
        </div>