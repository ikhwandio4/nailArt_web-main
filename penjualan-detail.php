<?php
// Include the file containing the database connection and functions
include_once 'penjualan.php';

// Mulai session untuk menyimpan pesan notifikasi
session_start();

// Ambil ID penjualan dari parameter GET
$id_penjualan = isset($_GET['id']) ? $_GET['id'] : die('ID Penjualan tidak ditemukan.');

// Ambil detail penjualan berdasarkan ID
$detail_penjualan = ambilDetailPenjualan($id_penjualan);

// Jika penjualan tidak ditemukan, beri pesan atau redirect ke halaman lain
if (!$detail_penjualan) {
    die('Penjualan tidak ditemukan.');
}

// Proses form untuk mengubah status
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_status = $_POST['status'];
    ubahStatusPenjualan($id_penjualan, $new_status);

    // Tambahkan pesan notifikasi ke dalam session
    $_SESSION['pesan'] = 'Status penjualan berhasil diubah.';
    
    // Redirect kembali ke halaman list-penjualan
    header("Location: penjualan-detail.php?id=$id_penjualan");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Detail Penjualan</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./quixlab-master/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="./quixlab-master/css/style.css" rel="stylesheet">
    <style>
        .content-body {
            margin-left: 250px;
            /* Adjust this value to match the width of your sidebar */
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Include sidebar -->
    <?php require 'sidebar.php'; ?>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Detail Penjualan</h4>
                            <?php
                            // Tampilkan pesan notifikasi jika ada
                            if (isset($_SESSION['pesan'])) {
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                                echo $_SESSION['pesan'];
                                echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                                echo '<span aria-hidden="true">&times;</span>';
                                echo '</button>';
                                echo '</div>';
                                // Hapus pesan notifikasi dari session setelah ditampilkan
                                unset($_SESSION['pesan']);
                            }
                            ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <tbody>
                                        <tr>
                                            <th>ID Penjualan</th>
                                            <td><?php echo $detail_penjualan['id_penjualan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Pelanggan</th>
                                            <td><?php echo htmlspecialchars($detail_penjualan['nama_pelanggan']); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Desain</th>
                                            <td><?php echo htmlspecialchars($detail_penjualan['nama_desain']); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pemesanan</th>
                                            <td><?php echo htmlspecialchars($detail_penjualan['tanggal_pemesanan']); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Waktu Pemesanan</th>
                                            <td><?php echo htmlspecialchars($detail_penjualan['waktu_pemesanan']); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Jumlah</th>
                                            <td><?php echo htmlspecialchars($detail_penjualan['jumlah']); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Harga Total</th>
                                            <td><?php echo htmlspecialchars($detail_penjualan['harga_total']); ?></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                <form action="" method="POST">
                                                    <select name="status" class="form-control">
                                                        <option value="belum" <?php echo ($detail_penjualan['status'] === 'belum') ? 'selected' : ''; ?>>Belum Dilayani</option>
                                                        <option value="sudah" <?php echo ($detail_penjualan['status'] === 'sudah') ? 'selected' : ''; ?>>Sudah Dilayani</option>
                                                    </select>
                                                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                                    <a href="penjualan-list.php" class="btn btn-secondary mt-3">Kembali</a>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required vendors -->
    <script src="./quixlab-master/plugins/common/common.min.js"></script>
    <script src="./quixlab-master/js/custom.min.js"></script>
    <script src="./quixlab-master/js/settings.js"></script>
    <script src="./quixlab-master/js/gleek.js"></script>
    <script src="./quixlab-master/js/styleSwitcher.js"></script>

    <!-- Datatable -->
    <script src="./quixlab-master/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./quixlab-master/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./quixlab-master/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>
