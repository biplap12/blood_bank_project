<?php 
include "../database/dbConnect.php";


session_start();
$username="NO user";
if (!isset($_SESSION['username'])){
    $_SESSION['errorMsg']="You are not logged in";
    header("location:../login/loginForm.php");
}else{
    $username=$_SESSION['username'];
   

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Bank</title>
</head>
<link rel="stylesheet" href="../style.css?v=<?php echo Time()?>" />
<link rel="stylesheet" href="../css/font-awesome_all.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/solid.min.css" />

<body>
    <div class="nav">
        <div class="nav-header">
            <div class="nav-title">Blood Bank</div>
        </div>
        <input type="checkbox" name="nav-check" id="nav-check">
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>

        <div class="nav-links">
            <!-- <li> <a href="../index/index.php"><i class="fa-solid fa-house"></i>Home</a></li> -->
            <?php 
            if($_SESSION['username']==="admin")
            {
                echo '<li> <a href="../admin/dashboard.php"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>';
                echo '<li> <a href="../displaydata/displayuser.php"><i class="fa-solid fa-users"></i> Users</a></li>';
             }
                

?>

            <!-- <li> <a href="../displaydata/displaymessage.php"><i class="fa-solid fa-message"></i> message</a></li> -->
            <li class="hideList">
                <div class="dropdown">
                    <button class="dropdown_button"><i class="fa-solid fa-user"></i> <?php echo $username?></button>
                    <div class="dropdown-options">
                        <!-- <a href="#"><i class="fa-solid fa-gauge"></i>Dashboard</a> -->
                        <a href="../passwordChange/changePasswordForm.php?id=<?php echo $_SESSION['uid']; ?>"><i
                                class="fa-solid fa-gear"></i>
                            Setting</a>
                        <!-- <a onclick=return changepassword($id) class='dis update' href='javascript:void(0)'>Setting</a> -->
                        <a class="dropdown_small_screen" href="../session/distroySession.php"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                    </div>
                </div>
            </li>
            <!-- <li class="small_screen" style="color: aliceblue;">
                <a class="dropdown_small_screen" href="../session/distroySession.php"><i
                        class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
            </li> -->



        </div>
    </div>