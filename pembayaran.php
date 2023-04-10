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
    header("location: index.html");
}

require 'functions.php';
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Nice lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>IGP Store</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
    <!-- Custom CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="customer.php" class="logo ps-5">
                            <span class="logo-text">
                                <!-- Light Logo text -->
                                <img src="assets/images/logo-light-customer.png" class="logo-light-customer.png"
                                    alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->

                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="float-start me-2"><?php echo $_SESSION['nama_lengkap']; ?></p>
                                <img src="assets/images/users/default-profile.jpg" alt="user" class="rounded-circle"
                                    width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="profil-customer.php"><i class="ti-user me-1 ms-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="customer-ganti-password.php"><i
                                        class="mdi mdi-key me-1 ms-1"></i>
                                    Ganti Password</a>
                                <!-- <a class="dropdown-item" href="tabel-penjualan"><i class="ti-wallet me-1 ms-1"></i>
                                    Keranjang Belanja</a> -->
                                <form action="logout.php" method="POST">
                                    <button class="dropdown-item btn" type="submit" name="logout"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-box-arrow-right me-1 ms-1"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd"
                                                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg>Log Out</button>
                                </form>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="customer.php"
                                aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Home</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profil-customer.php"
                                aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tampilan-produk.php"
                                aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">Produk Yang Dijual</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="PO.php"
                                aria-expanded="false">
                                <i class="mdi mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                        class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                    </svg></i>
                                <span class="hide-menu">Purchase Order</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="transaksi.php"
                                aria-expanded="false">
                                <i class="mdi mdi-package-down"></i>
                                <span class="hide-menu">Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="riwayat.php"
                                aria-expanded="false">
                                <i class="mdi mdi-dropbox"></i>
                                <span class="hide-menu">Riwayat</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Pembayaran</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="customer.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="riwayat.php">Riwayat</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Email campaign chart -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $id = $_GET['id'];
                                $data = mysqli_query($conn, "SELECT * FROM pembelian JOIN tb_user 
                                                            ON pembelian.id_user=tb_user.id
                                                            WHERE pembelian.id=$id");
                                $data_customer = mysqli_fetch_assoc($data);
                                ?>
                                <?php
                                $nama_pelanggan_beli = $data_customer['nama_lengkap'];
                                $nama_pelanggan_login = $_SESSION['nama_lengkap'];
                                if ($nama_pelanggan_beli !== $nama_pelanggan_login) {
                                    echo "<script>alert('Tidak ada tagihan yang harus dibayarkan');</script>";
                                    echo "<script>document.location= 'riwayat.php';</script>";
                                }
                                ?>

                                <h4 class="card-title mb-4 text-center">Form Pembayaran</h4>
                                <form class="form-horizontal form-material mx-2" method="POST" action=""
                                    enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-md-3">Nama Pelanggan</label>
                                        <div class="col-md-9">
                                            <input type="text" name="nama_lengkap"
                                                class="form-control form-control-line"
                                                value="<?php echo $_SESSION['nama_lengkap']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Username / Email</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control-line"
                                                value="<?php echo $_SESSION['username']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Jumlah Tagihan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control form-control-line"
                                                value="Rp <?php echo number_format($data_customer['total_harga']); ?>"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Metode Pembayaran</label>
                                        <div class="col-md-9">
                                            <select class="form-select form-control" name="metode_bayar"
                                                id="metode_bayar">
                                                <option value="BRI">BRI</option>
                                                <option value="Mandiri">Mandiri</option>
                                                <option value="Dana">Dana</option>
                                                <option value="Gopay">Gopay</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Jumlah Pembayaran</label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control form-control-line"
                                                name="jumlah_bayar" min="1" max="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3">Upload Bukti Pembayaran</label>
                                        <div class="col-md-9">
                                            <input type="file" name="foto" class="form-control col-md-12 ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" type="submit"
                                                name="kirim">Kirim</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                                if (isset($_POST['kirim'])) {
                                    $nama_lengkap = $_SESSION['nama_lengkap'];
                                    $tanggal_bayar = date('Y-m-d');
                                    $metode_bayar = $_POST['metode_bayar'];
                                    $jumlah_bayar = $_POST['jumlah_bayar'];

                                    $nama_foto = $_FILES["foto"]["name"];
                                    $lokasi_bukti = $_FILES["foto"]["tmp_name"];
                                    $nama_bukti = date("YmdHis") . $nama_foto;
                                    $imageFileType = strtolower(pathinfo(
                                        $nama_bukti,
                                        PATHINFO_EXTENSION
                                    ));
                                    if ($jumlah_bayar == $data_customer['total_harga']) {
                                        if (
                                            $imageFileType != "jpg"
                                            && $imageFileType != "png"
                                            && $imageFileType != "jpeg"
                                        ) {
                                            echo "<script>alert('Gagal mengirim bukti pembayaran!!Hanya file JPG, PNG dan JPEG yang diperbolehkan');</script>";
                                            echo "<script>document.location.href='pembayaran.php?id=$id';</script>";
                                        } else {
                                            move_uploaded_file($lokasi_bukti, "./assets/images/bukti_pembayaran/" . $nama_bukti);
                                            mysqli_query($conn, "INSERT INTO tb_pembayaran(id_pembelian, nama, tanggal_bayar, bukti_bayar, metode_bayar, jumlah_bayar)
                                                            VALUES ('$id', '$nama_lengkap', '$tanggal_bayar','$nama_bukti','$metode_bayar', '$jumlah_bayar')");
                                            mysqli_query($conn, "UPDATE pembelian SET status_pembelian='LUNAS' WHERE id=$id");

                                            echo "<script>alert('Konfirmasi Pembyaran berhasil!!');</script>";
                                            echo "<script>document.location.href='riwayat.php';</script>";
                                        }
                                    } else {
                                        echo "<script>
                                            alert('Jumlah Pembayaran tidak sesuai dengah jumlah tagihan! Mohon masukkan jumlah pembayaran yang sesuai');
                                            document.location= 'pembayaran.php?id=$id';
                                            </script>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- ============================================================== -->
            <!-- Email campaign chart -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                <p>Copyright &copy; <?= date('Y') ?> - <b><a class="text-dark text-decoration-none"
                            href="customer.php">PT
                            INTI GANDA PERDANA</a></b></p>
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>