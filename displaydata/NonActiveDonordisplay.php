<?php
 include "../header/header.php";
include "../database/dbConnect.php";

 


?>


<div class="main-content">
    <div class="title userprofile"><span>Not Active Donor</span>
        <a href="../admin/dashboard.php"><i class="fa-solid fa-xmark"></i></a>
    </div>
    <div class="content">
        <table class="message-table">



            <!-- <div id="loader" style="Display:none">
            <div class="loader"></div><br>
            Please Wait..
        </div> -->

            <script type="text/javascript">
            $(document).ready(function() {


                $.ajax({
                    url: "../getdata/getNonActivedonor.php",
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