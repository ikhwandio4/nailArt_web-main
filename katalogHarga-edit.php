<?php
require 'sidebar.php';
include 'koneksi.php';

$id = $_GET['ID'];
// Ambil data desain dari tabel desain_cadangan
$queryDesain = "SELECT * FROM desain_cadangan";
$resultDesain = mysqli_query($conn, $queryDesain);

// Ambil data lama berdasarkan ID atau cara lain yang sesuai
$queryDataLama = "SELECT * FROM katalog_harga WHERE id_katalog = $id";
$resultDataLama = mysqli_query($conn, $queryDataLama);
$data_lama = mysqli_fetch_assoc($resultDataLama);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Katalog Harga</title>
    <link rel="shortcut icon" type="image/png" href="/assets/images/lainnya/logo.jpg" />
    <link rel="stylesheet" href="./Modernize-bootstrap-free-main/src/assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <!-- Navbar content -->
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Forms</h5>
                        <div class="card">
                            <div class="card-body">
                                <form action="katalogHarga.php" method="POST">
                                    <input type="text" name="id_katalog" value="<?php echo htmlspecialchars($data_lama['id_katalog'] ?? ''); ?>">
                                    <div class="mb-3">
                                        <label for="id_desain" class="form-label">ID Desain</label>
                                        <select class="form-control" id="id_desain" name="id_desain" aria-describedby="idDesainHelp">
                                            <?php
                                            while ($rowDesain = mysqli_fetch_assoc($resultDesain)) {
                                                $selected = ($rowDesain['id_desain'] == $data_lama['id_desain']) ? 'selected' : '';
                                                echo "<option value='{$rowDesain['id_desain']}' $selected>{$rowDesain['nama_desain']}</option>";
                                            }
                                            ?>
                                        </select>
                                        <div id="idDesainHelp" class="form-text">Pilih ID desain.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_treatment" class="form-label">Nama Treatment</label>
                                        <input type="text" class="form-control" id="nama_treatment" name="nama_treatment" aria-describedby="namaHelp" value="<?php echo htmlspecialchars($data_lama['nama_treatment']); ?>">
                                        <div id="namaHelp" class="form-text">Masukkan nama treatment.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="number" class="form-control" id="harga" name="harga" aria-describedby="hargaHelp" value="<?php echo htmlspecialchars($data_lama['harga']); ?>">
                                        <div id="hargaHelp" class="form-text">Masukkan harga.</div>
                                    </div>
                                    <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
                                    <a href="katalogHarga-list.php" class="btn btn-secondary">Kembali</a>
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