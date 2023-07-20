<?php
 include "../header/header.php";
include "../database/dbConnect.php";

?>
<div class="main-content">
    <div class="title userprofile"><span>Completed Blood Request</span>
        <a href="../admin/dashboard.php"><i class="fa-solid fa-xmark"></i></a>
    </div>
    <div class="content">
        <table class="message-table">


            <script type="text/javascript">
            $(document).ready(function() {


                $.ajax({
                    url: "../getdata/getCompletedBloodRequest.php",
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