<?php 
ob_start();
session_start();
include 'src/config/config.php';
unset($_SESSION['customer']);
header("location: ".BASE_URL.'login.php'); 
?>