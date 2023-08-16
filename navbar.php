<?php
    date_default_timezone_set('Asia/Kathmandu');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
</head>
<link rel="stylesheet" href="Client_style.css?v=<?php echo Time()?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<body>
    <div>
        <header id="navbar">
            <nav class="navbar-container container">
                <a href="index.php" class="home-link">
                    <div class="navbar-logo">
                        <img src="./img/729.gif" alt="logo" height="30px" width="30px">
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
                        <li class="navbar-item"><a class="navbar-link" href="./login/loginForm.php">Admin</a></li>
                    </ul>
                </div>
            </nav>
        </header>