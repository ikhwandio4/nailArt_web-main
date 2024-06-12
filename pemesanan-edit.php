<?php
require 'sidebar.php';
include 'koneksi.php';

// Ambil ID pemesanan dari parameter URL
$id_pemesanan = isset($_GET['id']) ? $_GET['id'] : null;

// Ambil data pemesanan berdasarkan ID
$queryPemesanan = "SELECT * FROM pemesanan WHERE id_pemesanan = ?";
$stmt = $conn->prepare($queryPemesanan);
$stmt->bind_param("i", $id_pemesanan);
$stmt->execute();
$resultPemesanan = $stmt->get_result();
$dataPemesanan = $resultPemesanan->fetch_assoc();

// Ambil data desain dari tabel desain_cadangan
$queryDesain = "SELECT * FROM desain_cadangan";
$resultDesain = mysqli_query($conn, $queryDesain);

// Ambil data pelanggan dari tabel pelanggan
$queryPelanggan = "SELECT * FROM pelanggan";
$resultPelanggan = mysqli_query($conn, $queryPelanggan);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Pemesanan</title>
    <link rel="shortcut icon" type="image/png" href="/assets/images/lainnya/logo.jpg" />
    <link rel="stylesheet" href="./Modernize-bootstrap-free-main/src/assets/css/styles.min.css" />
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="body-wrapper">
            <header class="app-header">
                <!-- Header content here -->
            </header>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Update Pemesanan</h5>
                        <div class="card">
                            <div class="card-body">
                                <form action="pemesanan.php" method="POST">
                                    <input type="hidden" name="id_pemesanan" value="<?= $id_pemesanan ?>">
                                    <div class="mb-3">
                                        <label for="id_pelanggan" class="form-label">Pelanggan</label>
                                        <select class="form-control" id="id_pelanggan" name="id_pelanggan" aria-describedby="idPelangganHelp">
                                            <?php
                                            while ($rowPelanggan = mysqli_fetch_assoc($resultPelanggan)) {
                                                $selected = $rowPelanggan['id_pelanggan'] == $dataPemesanan['id_pelanggan'] ? 'selected' : '';
                                                echo "<option value='{$rowPelanggan['id_pelanggan']}' $selected>{$rowPelanggan['nama_pelanggan']}</option>";
                                            }
                                            ?>
                                        </select>
                                        <div id="idPelangganHelp" class="form-text">Pilih Pelanggan.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggalPemesanan" class="form-label">Tanggal Pemesanan</label>
                                        <input type="date" class="form-control" id="tanggalPemesanan" name="tanggal_pemesanan" value="<?= $dataPemesanan['tanggal_pemesanan'] ?>" aria-describedby="tanggalPemesananHelp">
                                        <div id="tanggalPemesananHelp" class="form-text">Masukkan tanggal pemesanan.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="waktuPemesanan" class="form-label">Waktu Pemesanan</label>
                                        <input type="time" class="form-control" id="waktuPemesanan" name="waktu_pemesanan" value="<?= $dataPemesanan['waktu_pemesanan'] ?>" aria-describedby="waktuPemesananHelp">
                                        <div id="waktuPemesananHelp" class="form-text">Masukkan waktu pemesanan.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_desain" class="form-label">ID Desain</label>
                                        <select class="form-control" id="id_desain" name="id_desain" aria-describedby="idDesainHelp">
                                            <?php
                                            while ($rowDesain = mysqli_fetch_assoc($resultDesain)) {
                                                $selected = $rowDesain['id_desain'] == $dataPemesanan['id_desain'] ? 'selected' : '';
                                                echo "<option value='{$rowDesain['id_desain']}' $selected>{$rowDesain['nama_desain']}</option>";
                                            }
                                            ?>
                                        </select>
                                        <div id="idDesainHelp" class="form-text">Pilih ID desain.</div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="ubah">Update</button>
                                    <a href="pemesanan-list.php" class="btn btn-secondary">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>