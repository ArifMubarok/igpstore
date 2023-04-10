<?php

require 'functions.php';

$id = $_GET["id"];

if (delete_data_barang($id) > 0) {
    echo "
        <script>
            alert('Data BERHASIL dihapus')
            document.location.href='tabel-penjualan.php';
        </script>";
} else {
    echo "
        <script>
            alert('Data GAGAL dihapus')
            document.location.href='tabel-penjualan.php';
        </script>";
}