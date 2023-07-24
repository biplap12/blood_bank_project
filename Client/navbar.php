<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
</head>
<link rel="stylesheet" href="style.css?v=<?php echo Time()?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<!-- online offline message -->

<!-- <link rel="stylesheet" href="../style.css?v="> -->


<body>
    <div>
        <header id="navbar">
            <nav class="navbar-container container">
                <a href="index.php" class="home-link">
                    <div class="navbar-logo">
                        <img src="../img/729.gif" alt="logo" height="30px" width="30px">
                    </div>
                    Bloodbank
                </a>
                <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu"
                    aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div id="navbar-menu" aria-labelledby="navbar-toggle">
                    <ul class="navbar-links">
                        <li class="navbar-item"><a class="navbar-link" href="index.php">Home</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="AboutClient.php">About</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="donor.php">Service</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="messageUsForm.php">Contact</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="../login/loginForm.php">Admin</a></li>
                    </ul>
                </div>
            </nav>
        </header>


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