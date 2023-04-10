<?php

include "functions.php";

$password_lama = md5($_POST['pass_lama']);
$username = $_POST['username'];
$tampil = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' and password = '$password_lama'");
$data = mysqli_fetch_array($tampil);
if ($data) {
    $password_baru = $_POST['pass_baru'];
    $konfrim_password = $_POST['confirm_pass'];
    if ($password_baru == $konfrim_password) {
        $pass_ok = md5($konfrim_password);
        $ubah = mysqli_query($conn, "UPDATE tb_user set password = '$pass_ok' WHERE id = '$data[id]'");
        if ($ubah) {
            echo "<script>
            alert('Password berhasil diubah')
            document.location='profil-customer.php'
            </script>";
        }
    }
} else {
    echo "<script>
            alert('Password lama tidak sesuai')
            document.location='profil-customer.php'
            </script>";
}