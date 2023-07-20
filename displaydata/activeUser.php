<?php

include "../header/header.php";
if($_SESSION['username']!=="admin"){
    header("location:../index");
die("");
};





?>

<style>
::-webkit-scrollbar {
    width: 5px;
    background: gray;
}
</style>

<div class="main-content">
    <div class="title userprofile">
        <span>Active Users</span>
        <a href="../admin/dashboard.php"><i class="fa-solid fa-xmark"></i></a>
    </div>
    <div class="content">
        <div id="show-table"></div>





        <script type="text/javascript">
        $(document).ready(function() {


            $.ajax({
                url: "../getdata/getActiveUser.php",
                type: "post",
                timeout: 10000,

                beforeSend: function() {
                    $("#loader").show();
                },
                success: function(data, status) {
                    $("#loader").hide();
                    $("#show-table").html(data);

                },
                error: function(xhr, data, status) {
                    $("#loader").hide();

                }

            });
        })
        </script>