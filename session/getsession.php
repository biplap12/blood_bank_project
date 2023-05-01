<?php  
session_start();
if (!isset($_SESSION['token'])){
    die("session is distroyed");
}
echo $_SESSION["token"];

 ?>