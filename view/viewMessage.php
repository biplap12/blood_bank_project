<?php
include "../header/header.php";
include "../database/dbConnect.php";
$id = $_GET["id"];

$q = "SELECT * FROM `message` WHERE id=$id";
$result = mysqli_query($con, $q);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


?>

<div class="main-content user_profile">
    <div class="title userprofile"><?php echo "Message Id : "  . $row ["id"];?>
        <a href="../displaydata/displaymessage.php"><i class="fa-solid fa-xmark"></i></a>

    </div>
    <div class="content">
        <table class="message-table">


            <div class="viewitemsbox">
                <div class="viewitems">
                    <h2>Full Name:</h2>
                    <h2><?php echo $row ["fullname"];?></h2>
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
                    <h2>Message Received:</h2>
                    <h3><?php echo $row ["messageDateTime"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="messageSee">
                    <h2>Message: </h2>
                    <h3><?php echo $row ["message"];?></h3>
                </div>

            </div>


    </div>

</div>
</div>
</div>