<?php
session_start();
include 'template/db.php';
unset($_SESSION['name']);
unset($_SESSION['login']);
unset($_SESSION['password']);
unset($_SESSION['status']);
header('Location:index.php');
?>