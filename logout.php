<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>alert('You must login first');</script>";
    header('location: login.php');
}
if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['nama_lengkap']);
    header("location: index.php");
}