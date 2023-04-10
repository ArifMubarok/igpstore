<?php

session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>alert('You must login first');</script>";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['nama_lengkap']);
    header("location: login.php");
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
    <title>Nota Pembayaran</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
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
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="customer.php" class="logo ps-5">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Light Logo icon -->
                                <img src="assets/images/logo-light-customer.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
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
                        <h4 class="page-title">Transaksi</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="customer.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="transaksi.php">Transaksi</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Nota Transaksi</li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title text-center">Nota Pembayaran</h4>
                            <?php
                            $data = mysqli_query($conn, "SELECT * FROM pembelian JOIN tb_user 
                                ON pembelian.id_user=tb_user.id
                                WHERE pembelian.id='$_GET[id]'");

                            $data_customer = mysqli_fetch_assoc($data);
                            ?>

                            <?php
                            $nama_pelanggan_beli = $data_customer['nama_lengkap'];
                            $nama_pelanggan_login = $_SESSION['nama_lengkap'];

                            if ($nama_pelanggan_beli !== $nama_pelanggan_login) {
                                echo "<script>alert('Tidak ada nota pembayaran');</script>";
                                echo "<script>document.location= 'riwayat.php';</script>";
                            }
                            ?>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td scope="col" class="col-1"></td>
                                        <td scope="col" class="col-3">Nama Lengkap </td>
                                        <td scope="col" class="col-3"> : <?php echo $data_customer['nama_lengkap'] ?>
                                        <td scope="col" class="col-5"></td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="col" class="col-1"></td>
                                        <td scope="col" class="col-3">Username / Email</td>
                                        <td scope="col" class="col-3"> : <?php echo $data_customer['username'] ?>
                                        <td scope="col" class="col-5"></td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="col-1">No</th>
                                        <th scope="col" class="col-3">Nama Barang</th>
                                        <th scope="col" class="col-1">Kondisi</th>
                                        <th scope="col" class="col-1">Berat</th>
                                        <th scope="col" class="col-2">Harga</th>
                                        <th scope="col" class="col-1">Jumlah</th>
                                        <th scope="col" class="col-1">Total Berat</th>
                                        <th scope="col" class="col-2">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count = 1; ?>
                                    <?php
                                    $data1 = mysqli_query($conn, "SELECT * FROM tb_pembelian_produk 
                                                        WHERE id_pembelian='$_GET[id]'");
                                    while ($data_produk = mysqli_fetch_assoc($data1)) :
                                    ?>
                                    <tr>
                                        <td><?php echo "$count"; ?></td>
                                        <td><?php echo $data_produk['nama_produk']; ?></td>
                                        <td><?php echo $data_produk['kondisi']; ?></td>
                                        <td><?php echo number_format($data_produk['berat_produk']); ?> Gram</td>
                                        <td>Rp <?php echo number_format($data_produk['harga_produk']); ?></td>
                                        <td><?php echo $data_produk['jumlah']; ?></td>
                                        <td><?php echo number_format($data_produk['total_berat']); ?> Gram</td>
                                        <td>Rp <?php echo number_format($data_produk['total_harga']); ?>
                                        </td>
                                    </tr>
                                    <?php $count++; ?>
                                    <?php endwhile; ?>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td colspan="6" class="text-center">Pengiriman :
                                            <?php echo $data_customer['kurir']; ?></td>
                                        <td class="col-2">Rp <?php echo number_format($data_customer['tarif']); ?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="border-bottom border-secondary border-top">
                                        <td></td>
                                        <td colspan="6" class="text-center">Total Pembayaran : </td>
                                        <td class="col-2">Rp <?php echo number_format($data_customer['total_harga']); ?>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="row justify-content-center mt-3">

                                <?php
                                $data_bayar = mysqli_query($conn, "SELECT * FROM tb_pembayaran JOIN pembelian ON tb_pembayaran.id_pembelian=pembelian.id 
                                                    WHERE tb_pembayaran.id_pembelian='$_GET[id]'");
                                $data_pembayaran = mysqli_fetch_assoc($data_bayar); ?>
                                <?php
                                if ($data_customer['status_pembelian'] == 'pending') {
                                ?>
                                <div class="col-md-6">
                                    <div class="alert alert-info rounded-3">
                                        <p>Pembayaran sebesar <strong> Rp
                                                <?php echo number_format($data_customer['total_harga']) ?></strong> bisa
                                            dilakukan
                                            melalui </p>
                                        <p><strong>BRI : </strong>8392 8391 4022 571 a/n ADMIN IGP STORE</p>
                                        <p><strong>Mandiri : </strong>4328 672 432 540 a/n ADMIN IGP STORE</p>
                                        <p><strong>DANA : </strong>08993600011 a/n ADMIN IGP STORE</p>
                                        <p><strong>Gopay : </strong>08993600011 a/n ADMIN IGP STORE</p>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="col-md-12">
                                    <div class="alert alert-success rounded-3">
                                        <p>Pembayaran sebesar <strong> Rp
                                                <?php echo number_format($data_customer['total_harga']) ?></strong>
                                            sudah dibayarkan melalui
                                            <strong><?php echo $data_pembayaran['metode_bayar'] ?></strong> oleh
                                            <strong>
                                                <?php echo $data_pembayaran['nama'] ?></strong>
                                        </p>
                                        <strong>Terima kasih telah melakukan pembayaran <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path
                                                    d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z" />
                                            </svg></strong>

                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                <p>Copyright &copy; <?= date('Y') ?> - <b><a class="text-dark text-decoration-none"
                            href="customer.php">PT
                            INTI GANDA PERDANA</a></b></p>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
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
</body>

</html>