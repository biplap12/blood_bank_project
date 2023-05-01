<?php 
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
<link rel="stylesheet" href="../style.css" />
<link rel="stylesheet" href="../css/font-awesome_all.min.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


<body?>
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
        <div class="username"><a class="username_logout_button"
                href="../session/distroySession.php"><?php echo $username;?>
                <i class="ace-icon fa fa-power-off " style="color: #fff; top:2px"></i></a>
        </div>
        <div class="nav-links">
            <a href="../index/index.php"><img src="../img/home_icon.png"
                    style="max-height: 20px; position: absolute; margin: 3px 0 0 -20px" />Home</a>
            <a href="../about/about.php"><img src="../img/about_icon.png"
                    style="max-height: 20px; position: absolute; margin: 3px 0 0 -20px" />About Us</a>
            <a href="../displaydata/displayuser.php"><img src="../img/services_icon.png"
                    style="max-height: 20px; position: absolute; margin: 3px 0 0 -20px" />displaydata</a>
            <!-- <a href="../login/loginForm.php"><img src="../img/Admin_icon.png"
                    style="max-height: 20px; position: absolute; margin: 3px 0 0 -20px" />login</a> -->
            <!-- 
            <a href="../displaydata/displayuser.php"><img src="../img/home_icon.png"
                    style="max-height: 20px; position: absolute; margin: 3px 0 0 -20px" />displaydata</a> -->

        </div>
    </div>