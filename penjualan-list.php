<?php
// Include the file containing the database connection and functions
include 'penjualan.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';

// Get filtered customer data based on search query
$penjualan = ($search != '') ? cariPenjualan($search) : ambilPenjualan();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Penjualan</title>
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
                            <h4 class="card-title">List Data Penjualan</h4>
                            <form action="" method="GET" class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Cari...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Cari</button>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Nama Desain</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Waktu Pemesanan</th>
                                            <th>Jumlah</th>
                                            <th>Harga Total</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($penjualan as $p) {
                                            echo "<tr>";
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . htmlspecialchars($p['nama_pelanggan']) . "</td>";
                                            echo "<td>" . htmlspecialchars($p['nama_desain']) . "</td>";
                                            echo "<td>" . htmlspecialchars($p['tanggal_pemesanan']) . "</td>";
                                            echo "<td>" . htmlspecialchars($p['waktu_pemesanan']) . "</td>";
                                            echo "<td>" . htmlspecialchars($p['jumlah']) . "</td>";
                                            echo "<td>" . htmlspecialchars($p['harga_total']) . "</td>";
                                            echo "<td>" . ucfirst($p['status']) . "</td>";
                                            echo "<td>";
                                            echo "<a href='penjualan-detail.php?id=" . $p['id_penjualan'] . "' class='btn btn-sm btn-info'>Detail</a> ";
                                            echo "<a href='penjualan-edit.php?id=" . $p['id_penjualan'] . "' class='btn btn-sm btn-warning'>Edit</a> ";
                                            echo "<a href='penjualan.php?hapus=" . $p['id_penjualan'] . "' class='btn btn-sm btn-danger' name='hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus penjualan ini?\")'>Hapus</a>";
                                            echo "</td>";
                                            echo "</tr>";
                                            $no++;
                                        }
                                        ?>
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
