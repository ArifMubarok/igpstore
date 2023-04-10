<?php

require "functions.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $pass);
$role = mysqli_escape_string($conn, $_POST['role']);


$query = "SELECT * FROM tb_user WHERE username = '$username' and role = '$role'";
$cek_user = mysqli_query($conn, $query);

$user_valid = mysqli_fetch_array($cek_user);

if ($user_valid) {
    if ($password == $user_valid['password']) {

        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['role'] = $user_valid['role'];
        $_SESSION['keranjang'] = array();

        if ($role == "Admin") {
            header('location: admin.php');
        } else {
            header('location: customer.php');
        }
    }
    echo "<script>
    alert('Password tidak sesuai')
    document.location= 'login.php'
    </script>";
} else {
    echo "<script>
    alert('Username tidak terdaftar')
    document.location= 'login.php'
    </script>";
}