<?php
// Include the file containing the database connection and functions
include 'pemesanan.php'; // This should be renamed to a more relevant file name, e.g., pemesanan.php

$search = isset($_GET['search']) ? $_GET['search'] : '';

// Get filtered customer data based on search query
$pemesanan = ($search != '') ? cariPemesanan($search) : ambilPemesanan();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Pemesanan</title>
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
                            <h4 class="card-title">List Data Pemesanan</h4>
                            <form action="" method="GET" class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Cari...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Cari</button>
                                    </div>
                                </div>
                            </form>
                            <a href="pemesanan-add.php" class="btn btn-primary mb-3">Tambah</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>ID Pelanggan</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Waktu Pemesanan</th>
                                            <th>ID Desain</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($pemesanan as $p) {
                                            echo "<tr>";
                                            echo "<td>" . $p['id_pelanggan'] . "</td>";
                                            echo "<td>" . $p['tanggal_pemesanan'] . "</td>";
                                            echo "<td>" . $p['waktu_pemesanan'] . "</td>";
                                            echo "<td>" . $p['id_desain'] . "</td>";
                                            echo "<td>";
                                            echo "<a href='pemesanan-edit.php?id=" . $p['id_pemesanan'] . "' class='btn btn-sm btn-warning'>Edit</a> ";
                                            echo "<a href='pelanggan.php?hapus_pemesanan=" . $p['id_pemesanan'] . "' class='btn btn-sm btn-danger' name='hapus_pemesanan' onclick='return confirm(\"Apakah Anda yakin ingin menghapus pemesanan ini?\")'>Hapus</a>";
                                            echo "</td>";
                                            echo "</tr>";
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
</body>

</html>