<?php
 include "../header/header.php";
include "../admin/admin.php";
include "../database/dbConnect.php";

 


?>

<div class="adminContent">
    <h1>Inbox</h1>
    <hr>
    <div class="main-content">
        <div class="title">Massages</div>
        <div class="content">
            <table class="massage-table">



                <!-- <div id="loader" style="Display:none">
            <div class="loader"></div><br>
            Please Wait..
        </div> -->

                <script type="text/javascript">
                $(document).ready(function() {


                    $.ajax({
                        url: "../getdata/getmassagefromuser.php",
                        type: "post",
                        // timeout: 10000,

                        beforeSend: function() {
                            $("#loader").show();
                        },
                        success: function(data, status) {
                            $("#loader").hide();
                            $(".massage-table").html(data);

                        },
                        error: function(xhr, data, status) {
                            $("#loader").hide();

                        }

                    });
                })
                </script>
        </div>