<?php
// $target_dir = "assets/images/data_barang/";
// $target_file = $target_dir .
//     basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo(
//     $target_file,
//     PATHINFO_EXTENSION
// ));
// // Check if image file is a actual image or fake image

// // Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// // Allow certain file formats
// if (
//     $imageFileType != "jpg" && $imageFileType != "png" &&
//     $imageFileType != "jpeg"
//     && $imageFileType != "gif"
// ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
//     // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file(
//         $_FILES["fileToUpload"]["tmp_name"],
//         $target_file
//     )) {
//         echo "The file " .
//             htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "
//     has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }

// $server = "localhost";
// $user = "root";
// $password = "";
// $database = "db_customer";

// $db =  mysqli_connect($server, $user, $password, $database) or die(mysqli_connect_error($conn));

// if (isset($_POST['add'])) {
//     echo "connect";
//     $nama_barang = mysqli_real_escape_string($db, $_POST['nama_barang']);
//     $harga_barang = mysqli_real_escape_string($db, $_POST['harga']);
//     $kondisi_barang = mysqli_real_escape_string($db, $_POST['kondisi']);

//     $query = "INSERT INTO tb_data_barang (nama_barang, harga, kondisi)
//                 VALUES ('$nama_barang', '$harga_barang', '$kondisi_barang')";
//     if (mysqli_query($db, $query)) {
//         echo "<script>alert('Data BERHASIL ditambahkan')</script>";
//     } else {
//         echo "<script>alert('Gagal Ditambahkan')</script>";
//     }
//     header('location: tabel-penjualan.php');

require 'functions.php';


if (isset($_POST['add'])) {

    if (tambah_data($_POST) > 0) {
        echo "
        <script>
            alert('Data BERHASIL ditambahkan')
            document.location.href='tabel-penjualan.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data GAGAL ditambahkan')
            document.location.href='tabel-penjualan.php';
        </script>";
    }
}
//}