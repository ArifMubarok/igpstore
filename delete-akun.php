<?php

require 'functions.php';

$id = $_GET["id"];

if (delete_akun($id) > 0) {
    echo "
        <script>
            alert('Data BERHASIL dihapus')
            document.location.href='user.php';
        </script>";
} else {
    echo "
        <script>
            alert('Data GAGAL dihapus')
            document.location.href='user.php';
        </script>";
}