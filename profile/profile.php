<?php
include "../header/header.php";
include "../database/dbConnect.php";
$id = $_GET["id"];

$q = "SELECT * FROM `tbl_user` WHERE id=$id";
$result = mysqli_query($con, $q);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


?>

<div class="main-content user_profile">
    <div class="title userprofile"><?php echo "User Id : "  . $row ["id"];?>
        <a href="../admin/dashboard.php"><i class="fa-solid fa-xmark"></i></a>

    </div>
    <div class="content">
        <table class="message-table">


            <div class="viewitemsbox">
                <div class="viewitems">
                    <h2>Name:</h2>
                    <h2><?php echo $row ["name"];?></h2>
                </div>
                <hr class="viewitemhr">
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Phone Number:</h2>
                    <h3><?php echo $row ["phone"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Email: </h2>
                    <h3><?php echo $row ["email"];?></h3>
                </div>

                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Username:</h2>
                    <h3><?php echo $row ["username"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>SignUp Date: </h2>
                    <h3><?php echo $row ["signUpDate"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Status: </h2>
                    <h3><?php echo $row ["status"];?></h3>
                </div>
                <hr class="viewitemhr">
            </div>


    </div>

</div>
</div>
</div>