<?php
// Include file database connection
include 'pelanggan.php';

// Get search query from URL if available
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Get filtered customer data based on search query
$pelanggan = ($search != '') ? cariPelanggan($search) : ambilPelanggan();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Pelanggan</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./quixlab-master/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="./quixlab-master/css/style.css" rel="stylesheet">
    <style>
        .content-body {
            margin-left: 250px;
            /* Adjust this value to match the width of your sidebar */
            padding: 5px;
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
                            <h4 class="card-title">List Data Pelanggan</h4>
                            <form action="" method="GET" class="mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Cari...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Cari</button>
                                    </div>
                                </div>
                            </form>
                            <a href="pelanggan-add.php" class="btn btn-primary mb-3">Tambah</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>No. HP</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($pelanggan as $p) {
                                            echo "<tr>";
                                            echo "<td>" . $p['id_pelanggan'] . "</td>";
                                            echo "<td>" . $p['nama_pelanggan'] . "</td>";
                                            echo "<td>" . $p['no_telp'] . "</td>";
                                            echo "<td>" . $p['alamat'] . "</td>";
                                            echo "<td>";
                                            echo "<a href='pelanggan-edit.php?id=" . $p['id_pelanggan'] . "' class='btn btn-sm btn-warning'>Edit</a> ";
                                            echo "<a href='pelanggan.php?hapus=" . $p['id_pelanggan'] . "' class='btn btn-sm btn-danger' name='hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus pelanggan ini?\")'>Hapus</a>";
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