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
            <div class="nav-title">
                <a href="../admin/dashboard.php" class="home-link">
                    <div class="navbar-logo">
                        <img src="../img/729.gif" alt="logo" height="30px" width="30px">
                    </div>
                    Blood Bank
                </a>

            </div>
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
            <li class="hideList">
                <div class="dropdown">
                    <button class="dropdown_button"><i class="fa-solid fa-user"></i> <?php echo $username?></button>
                    <div class="dropdown-options">
                        <a href="../passwordChange/changePasswordForm.php?id=<?php echo $_SESSION['uid']; ?>"><i
                                class="fa-solid fa-gear"></i>
                            Change password</a>
                        <?php
                      if ($_SESSION['username'] === "admin") {
                        echo '<a href="../displaydata/addBloodGroup.php"><i class="fa-sharp fa-solid fa-plus"></i>Add
                            Blood</a>';}?>
                        <a class="dropdown_small_screen" href="../session/distroySession.php"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                    </div>
                </div>
            </li>
        </div>
    </div>




    <!-- online offline message -->



    <script>
    function updateStatus(event) {
        const root = document.documentElement;
        const color = navigator.onLine ? "green" : "red";
        root.style.setProperty("--status-color", color);

        const showAlert = sessionStorage.getItem('showAlert');

        if (!showAlert && !navigator.onLine) {
            // Show SweetAlert2 modal dialog when offline
            Swal.fire({
                icon: "info",
                title: "Offline",
                text: "You are currently offline. Please check your internet connection.",
                confirmButtonText: "OK",
                didClose: () => {
                    sessionStorage.setItem('showAlert', true); // Set the showAlert flag to true
                }
            });
        }
    }

    // Call updateStatus initially to set the correct color when the page loads
    updateStatus();

    // Listen for the "online" and "offline" events to update the status and show the alerts
    window.addEventListener("online", () => {
        // Show SweetAlert2 modal dialog when online
        Swal.fire({
            icon: "info",
            title: "Online",
            text: "You are back online. Your internet connection is restored.",
            confirmButtonText: "OK",
        });

        // Call updateStatus when online to set the correct color
        updateStatus();
    });

    window.addEventListener("offline", updateStatus);
    </script>