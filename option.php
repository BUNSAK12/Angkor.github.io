<?php
session_start();
// unset($_SESSION['user_id']);
// unset($_SESSION['user_email']);
header("location:users/login.php");
?>