<?php 
session_start();
session_unset();
session_destroy();


// echo("session deleted");
// header("location:../login/loginForm.php");
header("location:../Client/index.php");

?>