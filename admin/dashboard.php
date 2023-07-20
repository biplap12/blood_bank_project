<?php

include "../database/dbConnect.php";
include "../header/header.php";
include "../admin/admin.php";
// if(!isset($_SESSION['username'])){

// }

$name=$_SESSION['name'];

?>
<?php

                $sql ="SELECT COUNT(*) AS count FROM `tbl_user` WHERE `status`='Deactive'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $total_deactivate_user =$row['count'];
                
                $sql ="SELECT COUNT(*) AS count FROM `tbl_user`";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $total_user =$row['count'];

                $sql ="SELECT COUNT(*) AS count FROM `tbl_user` WHERE `status`='Pending'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $total_pendings_user =$row['count'];
                
                $sql ="SELECT COUNT(*) AS count FROM `tbl_user` WHERE `status`='Active'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $Active_user =$row['count'];
?>



<section class="dashboard_admin">

    <h1 class="dashboard_heading">Dashboard</h1>
    <hr>
    <div class="dashboard_box-container">

        <div class="dashboard_box">
            <h1>Welcome!</h1>
            <h2><?php echo $_SESSION['name']; ?></h2>
            <a href="../profile/profile.php?id=<?php echo $_SESSION['uid'];?>" class="dashboard_btn">View</a>
        </div>
        <div class="dashboard_box">
            <?php
                $sql ="SELECT COUNT(*) AS count FROM `message`";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $message =$row['count'];
                ?>
            <h1><?= $message;?></h1>
            <p>Message</p>
            <a href="../displaydata/displaymessage.php" class="dashboard_btn">View</a>
        </div>

        <div class="dashboard_box">
            <?php
                $sql ="SELECT COUNT(*) AS count FROM `donors` WHERE `status`='Active'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $Active_donor =$row['count'];
                ?>
            <h1><?= $Active_donor;?></h1>
            <p>Active Donor</p>
            <a href="../displaydata/activedonor.php" class="dashboard_btn">View</a>
        </div>
        <div class="dashboard_box">
            <?php
                $sql ="SELECT COUNT(*) AS count FROM `donors` WHERE `status`='Pending'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $pending_donor =$row['count'];
                ?>
            <h1><?= $pending_donor;?></h1>
            <p>Non Active Donor</p>
            <a href="../displaydata/donordisplay.php" class="dashboard_btn">View</a>
        </div>

        <div class="dashboard_box">
            <?php
                $sql ="SELECT COUNT(*) AS count FROM `needblood` ";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $total_blood_request =$row['count'];
                ?>
            <h1><?= $total_blood_request;?></h1>
            <p>Total Blood Request</p>
            <a href="../displaydata/needblooddisplay.php" class="dashboard_btn">View</a>
        </div>

        <div class="dashboard_box">
            <?php
                $sql ="SELECT COUNT(*) AS count FROM `needblood` WHERE `status` = 'Pending'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $total_pendings =$row['count'];
                ?>
            <h1><?= $total_pendings;?></h1>
            <p>Pending Blood Request</p>
            <a href="../displaydata/needblooddisplay.php" class="dashboard_btn">View</a>
        </div>

        <div class="dashboard_box">
            <?php
                $sql ="SELECT COUNT(*) AS count FROM `needblood` WHERE `status` = 'Not Completed'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $total_Not_Completed =$row['count'];
                ?>
            <h1><?= $total_Not_Completed;?></h1>
            <p>Approved Blood Request</p>
            <a href="../displaydata/needblooddisplay.php" class="dashboard_btn">View</a>
        </div>

        <div class="dashboard_box">
            <?php
                $sql ="SELECT COUNT(*) AS count FROM `needblood` WHERE `status` = 'Completed'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $total_Completed=$row['count'];
                ?>
            <h1><?= $total_Completed;?></h1>
            <p>Completed Blood Request</p>
            <a href="../displaydata/needblooddisplay.php" class="dashboard_btn">View</a>
        </div>



        <?php
        if ($_SESSION['username'] === "admin") {
    echo '
    <div class="dashboard_box">
        <h1>' . $total_user . '</h1>
        <p>Total users</p>
        <a href="../displaydata/displayuser.php" class="dashboard_btn">View</a>
    </div>
    <div class="dashboard_box">
        <h1>' . $Active_user . '</h1>
        <p>Active User</p>
        <a href="../displaydata/displayuser.php" class="dashboard_btn">View</a>
    </div>

    <div class="dashboard_box">
        <h1>' . $total_pendings_user . '</h1>
        <p>Pending User</p>
        <a href="../displaydata/displayuser.php" class="dashboard_btn">View</a>
    </div>

    <div class="dashboard_box">
        <h1>' . $total_deactivate_user . '</h1>
        <p>Deactive User</p>
        <a href="../displaydata/displayuser.php" class="dashboard_btn">View</a>
    </div>
    ';
}
?>

    </div>
</section>