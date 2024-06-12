<?php
// Include sidebar
require 'sidebar.php';

// Include database connection
require 'koneksi.php';

// Query to retrieve data for dropdown options
$queryPelanggan = "SELECT * FROM pelanggan";
$resultPelanggan = mysqli_query($conn, $queryPelanggan);

$queryDesain = "SELECT * FROM desain_cadangan";
$resultDesain = mysqli_query($conn, $queryDesain);

$queryTreatment = "SELECT * FROM katalog_harga";
$resultTreatment = mysqli_query($conn, $queryTreatment);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Penjualan</title>
    <link rel="shortcut icon" type="image/png" href="/assets/images/lainnya/logo.jpg" />
    <link rel="stylesheet" href="./Modernize-bootstrap-free-main/src/assets/css/styles.min.css" />
</head>

<body>
    <!-- Body content -->

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Form Pemesanan</h5>
                            <div class="card">
                                <div class="card-body">
                                    <form action="penjualan.php" method="POST">
                                        <div class="mb-3">
                                            <label for="idPelanggan" class="form-label">Pelanggan</label>
                                            <select class="form-control" id="idPelanggan" name="id_pelanggan" aria-describedby="pelangganHelp">
                                                <?php
                                                while ($rowPelanggan = mysqli_fetch_assoc($resultPelanggan)) {
                                                    echo "<option value='" . $rowPelanggan['id_pelanggan'] . "'>" . $rowPelanggan['nama_pelanggan'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                            <div id="pelangganHelp" class="form-text">Pilih pelanggan.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="idDesain" class="form-label">Desain</label>
                                            <select class="form-control" id="idDesain" name="id_desain" aria-describedby="desainHelp">
                                                <?php
                                                while ($rowDesain = mysqli_fetch_assoc($resultDesain)) {
                                                    echo "<option value='" . $rowDesain['id_desain'] . "'>" . $rowDesain['nama_desain'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                            <div id="desainHelp" class="form-text">Pilih desain.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tanggalPenjualan" class="form-label">Tanggal Penjualan</label>
                                            <input type="date" class="form-control" id="tanggalPenjualan" name="tanggal_penjualan" aria-describedby="tanggalHelp">
                                            <div id="tanggalHelp" class="form-text">Masukkan tanggal penjualan.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="namaTreatment" class="form-label">Nama Treatment</label>
                                            <select class="form-control" id="namaTreatment" name="nama_treatment" aria-describedby="treatmentHelp">
                                                <?php
                                                while ($rowTreatment = mysqli_fetch_assoc($resultTreatment)) {
                                                    echo "<option value='" . $rowTreatment['nama_treatment'] . "'>" . $rowTreatment['nama_treatment'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                            <div id="treatmentHelp" class="form-text">Pilih nama treatment.</div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
                                        <a href="penjualan-list.php" class="btn btn-secondary">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Other scripts -->
        <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/sidebarmenu.js"></script>
        <script src="../assets/js/app.min.js"></script>
        <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>