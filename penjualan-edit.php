<?php
// Include the file containing the database connection and functions
include 'penjualan.php';

// Initialize variables
$id_penjualan = $id_pelanggan = $id_desain = $tanggal_pemesanan = $waktu_pemesanan = $jumlah = $harga_total = $status = '';

// Check if ID parameter exists
if (isset($_GET['id'])) {
    $id_penjualan = $_GET['id'];

    // Get penjualan data based on id_penjualan
    $penjualan = ambilDetailPenjualan($id_penjualan);

    // Check if data exists
    if ($penjualan) {
        $id_pelanggan = $penjualan['id_pelanggan'];
        $id_desain = $penjualan['id_desain'];
        $tanggal_pemesanan = $penjualan['tanggal_pemesanan'];
        $waktu_pemesanan = $penjualan['waktu_pemesanan'];
        $jumlah = $penjualan['jumlah'];
        $harga_total = $penjualan['harga_total'];
        $status = $penjualan['status'];
    } else {
        // Redirect to list page if data not found
        header("Location: penjualan-list.php");
        exit();
    }
}

// Process form submission (update)
if (isset($_POST['update'])) {
    $id_penjualan = $_POST['id_penjualan'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $id_desain = $_POST['id_desain'];
    $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
    $waktu_pemesanan = $_POST['waktu_pemesanan'];
    $jumlah = $_POST['jumlah'];
    $harga_total = $_POST['harga_total'];
    $status = $_POST['status'];

    // Update penjualan data in database
    $success = ubahPenjualan($id_penjualan, $id_pelanggan, $id_desain, $tanggal_pemesanan, $waktu_pemesanan, $jumlah, $harga_total, $status);

    if ($success) {
        // Redirect to list page after successful update
        header("Location: penjualan-list.php?pesan=Data penjualan berhasil diubah");
        exit();
    } else {
        $pesan_error = "Gagal mengupdate data penjualan";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edit Data Penjualan</title>
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
                            <h4 class="card-title">Edit Data Penjualan</h4>
                            <form action="" method="POST">
                                <input type="hidden" name="id_penjualan" value="<?= $id_penjualan ?>">
                                <div class="mb-3">
                                    <label for="id_pelanggan" class="form-label">Pelanggan</label>
                                    <select class="form-control" id="id_pelanggan" name="id_pelanggan" required>
                                        <?php
                                        // Loop through customers data and create options
                                        foreach ($customers as $customer) {
                                            $selected = ($customer['id_pelanggan'] == $id_pelanggan) ? 'selected' : '';
                                            echo "<option value='" . $customer['id_pelanggan'] . "' $selected>" . htmlspecialchars($customer['nama_pelanggan']) . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="id_desain" class="form-label">Desain</label>
                                    <select class="form-control" id="id_desain" name="id_desain" required>
                                        <?php
                                        // Loop through designs data and create options
                                        foreach ($designs as $design) {
                                            $selected = ($design['id_desain'] == $id_desain) ? 'selected' : '';
                                            echo "<option value='" . $design['id_desain'] . "' $selected>" . htmlspecialchars($design['nama_desain']) . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_pemesanan" class="form-label">Tanggal Pemesanan</label>
                                    <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" value="<?= $tanggal_pemesanan ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="waktu_pemesanan" class="form-label">Waktu Pemesanan</label>
                                    <input type="time" class="form-control" id="waktu_pemesanan" name="waktu_pemesanan" value="<?= $waktu_pemesanan ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah</label>
                                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $jumlah ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="harga_total" class="form-label">Harga Total</label>
                                    <input type="number" class="form-control" id="harga_total" name="harga_total" value="<?= $harga_total ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="pending" <?= ($status == 'pending') ? 'selected' : '' ?>>Pending</option>
                                        <option value="proses" <?= ($status == 'proses') ? 'selected' : '' ?>>Proses</option>
                                        <option value="selesai" <?= ($status == 'selesai') ? 'selected' : '' ?>>Selesai</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="update">Update</button>
                                <a href="penjualan-list.php" class="btn btn-secondary">Kembali</a>
                            </form>
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
