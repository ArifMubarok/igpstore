<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "db_customer";

$conn = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($conn));
$koneksi = new mysqli($server, $user, $password, $database);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    global $conn;
    $username = strtolower($data["username"]);
    $password = mysqli_escape_string($conn, $data["password"]);
    $password2 = mysqli_escape_string($conn, $data["password2"]);
    $nama = mysqli_escape_string($conn, $_POST["nama_lengkap"]);
    $role = mysqli_escape_string($conn, $_POST["role"]);

    $result = mysqli_query($conn, "SELECT username FROM tb_user 
                                    WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('username sudah digunakan');
        </script>
        ";
        return false;
    }
    if ($password != $password2) {
        echo "
        <script>
            alert('password tidak sesuai');
        </script>
        ";
    } else {
        $password = md5($password);
        $saved = mysqli_query($conn, "INSERT INTO tb_user VALUES ('','$nama','$username','$password','$role')");
        return mysqli_affected_rows($conn);
    }
}

function tambah_data($data)
{
    global $conn;
    $nama_barang = $data["nama_barang"];
    $harga = $data["harga"];
    $kondisi = $data["kondisi"];
    $berat = $data["berat"];
    $stock = $data["stock_barang"];
    $deskripsi = $data["deskripsi"];

    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];


    $imageFileType = strtolower(pathinfo(
        $nama_foto,
        PATHINFO_EXTENSION
    ));
    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" &&
        $imageFileType != "jpeg"
    ) {
        echo "<script>alert('Upload Gagal!!Hanya file JPG, PNG dan JPEG yang diperbolehkan');</script>";
        echo "<script>document.location.href='form-tambah-barang.php';</script>";
    } else {
        move_uploaded_file($lokasi_foto, "./assets/images/data_barang/" . $nama_foto);
        $query = "INSERT INTO tb_data_barang 
        VALUES ('','$nama_barang', '$kondisi', '$nama_foto', $harga, '$deskripsi', $berat, $stock)
        ";

        mysqli_query($conn, $query);
    }


    return mysqli_affected_rows($conn);
}

function delete_data_barang($id)
{

    global $conn;
    $query = "DELETE FROM tb_data_barang WHERE id=$id";

    mysqli_query($conn, $query);

    // $query1 = "SELECT * FROM tb_data_barang WHERE id=$id";
    // $result = mysqli_query($conn, $query1);
    // $row = mysqli_fetch_assoc($result);
    // $foto = $row["foto"];
    // if (file_exists("./assets/images/data_barang/$foto")) {
    //     unlink("./assets/images/data_barang/$foto");
    // }

    return mysqli_affected_rows($conn);
}

function ubah_data_barang($data)
{

    global $conn;

    $id = $data["id"];
    $nama_barang = $data["nama_barang"];
    $harga = $data["harga"];
    $kondisi = $data["kondisi"];
    $berat = $data["berat"];
    $stock = $data["stock_barang"];
    $deskripsi = $data["deskripsi"];

    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi_foto, "./assets/images/data_barang/" . $nama_foto);

    $query1 = "UPDATE tb_data_barang SET
                nama_barang = '$nama_barang',
                kondisi = '$kondisi',
                foto = '$nama_foto',
                harga = $harga,
                deskripsi = '$deskripsi',
                berat = $berat,
                stock_barang = $stock
                WHERE id = $id
    ";

    mysqli_query($conn, $query1);

    return mysqli_affected_rows($conn);
}

function delete_akun($id)
{

    global $conn;
    $query = "DELETE FROM tb_user WHERE id=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}