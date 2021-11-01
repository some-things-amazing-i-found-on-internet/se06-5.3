<?php
ob_start();
session_destroy();
include 'src/config/DB.php';
unset($_SESSION['customer']);
header("location: ".BASE_URL.'login.php');
