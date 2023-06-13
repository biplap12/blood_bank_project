<?php
include "../header/header.php";
include "../admin/admin.php";
include "../database/dbConnect.php";
$id = $_GET["id"];

$q = "SELECT * FROM `donors` WHERE id=$id";
$result = mysqli_query($con, $q);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$photo = $row['photo'];

$status = $row["status"];
$buttonColor = ($status == "Active") ? "green" : "red";
$newStatus = ($status == "Active") ? "Pending" : "Active";
$newButtonColor = ($newStatus == "Active") ? "green" : "red";
?>

<div class="adminContent">
    <h1 class="view-heading">View </h1>
    <hr>
    <div class="main-content">
        <div class="title"><?php echo "Donor : "  . $row ["fullname"];?></div>
        <div class="content">
            <table class="massage-table">

                <div class="viewitem">
                    <div class="viewitemsbox">
                        <div> <img class="responsive" width="200px" src="../img/donor_images/<?php echo $photo ?>"
                                alt="Image" srcset=""></div>
                    </div>
                    <div class="viewitemsbox">
                        <div class="viewitems">
                            <h2>ID:</h2>
                            <h3><?php echo $row ["id"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Father Name:</h2>
                            <h3><?php echo $row ["fathername"];?></h3>
                        </div>
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
                            <h2>Ward No.:</h2>
                            <h3><?php echo $row ["wardno"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Address:</h2>
                            <h3><?php echo $row ["address"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Country: </h2>
                            <h3><?php echo $row ["country"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>City: </h2>
                            <h3><?php echo $row ["city"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Street: </h2>
                            <h3><?php echo $row ["street"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Email:</h2>
                            <h3><?php echo $row ["email"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Phone No.1: </h2>
                            <h3><?php echo $row ["phone1"];?></h3>
                        </div>
                        <hr class="viewitemhr">
                        <div class="viewitems">
                            <h2>Phone No.2:</h2>
                            <h3><?php echo $row ["phone2"];?></h3>
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