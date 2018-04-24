<?php
session_start();
unset($_SESSION["auth"]);
unset($_SESSION["username"]);
unset($_SESSION["first_name"]);
unset($_SESSION["second_name"]);
unset($_SESSION["email"]);
unset($_SESSION["profile"]);
header('Location: login.php');
?>