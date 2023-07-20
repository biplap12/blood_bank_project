<?php
include "../header/header.php";
include "../admin/admin.php";
include "../database/dbConnect.php";
$id = $_GET["id"];

$q = "SELECT * FROM `donors` WHERE id=$id";
$result = mysqli_query($con, $q);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$status = $row["status"];
$buttonColor = ($status == "Active") ? "green" : "red";
$newStatus = ($status == "Active") ? "Pending" : "Active";
$newButtonColor = ($newStatus == "Active") ? "green" : "red";
?>

<div class="adminContent">
    <h1 class="view-heading">View </h1>
    <hr>
    <div class="main-content">
        <div class="title"><?php echo "Donor Id : "  . $row ["id"];?></div>
        <div class="content">
            <table class="message-table">

                <div class="viewitem">

                    <div class="viewitemsbox">
                        <div class="viewitems">
                            <h2>Donor Name:</h2>
                            <h2><?php echo $row ["fullname"];?></h2>
                        </div>
                        <hr class="viewitemhr">
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Gender: </h2>
                            <h3><?php echo $row ["gender"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Blood Group:</h2>
                            <h3><?php echo $row ["bloodgroup"];?></h3>
                        </div>

                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Address:</h2>
                            <h3><?php echo $row ["address"];?></h3>
                        </div>

                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Email:</h2>
                            <h3><?php echo $row ["email"];?></h3>
                        </div>

                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Phone No.:</h2>
                            <h3><?php echo $row ["phone"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Birth Date: </h2>
                            <h3><?php echo $row ["birthdate"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>New donor: </h2>
                            <h3><?php echo $row ["newdonor"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Status: </h2>
                            <h3><?php echo $row ["status"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                    </div>


                </div>
                <?php if ($status == 'Active') : ?>
                <a class="activateviewbtn" style="background-color: <?php echo $buttonColor; ?>"
                    href="../Deactive/deactivedonor.php?id=<?php echo $id; ?>"><?php echo ucfirst($status); ?></a>
                <?php else : ?>
                <a class="activateviewbtn" style="background-color: <?php echo $buttonColor; ?>"
                    href="../Activate/activatedoner.php?id=<?php echo $id; ?>"><?php echo ucfirst($status); ?></a>
                <?php endif; ?>
        </div>
    </div>
</div>