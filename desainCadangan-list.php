<?php
// Include the file containing the database connection and functions
include 'desainCadangan.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Desain Cadangan</title>
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
                            <h4 class="card-title">List Data Desain Cadangan</h4>
                            <a href="desainCadangan-add.php" class="btn btn-primary mb-3">Tambah</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Nama Desain</th>
                                            <th>Deskripsi Desain</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $desain = ambilDesain();
                                        foreach ($desain as $d) {
                                            echo "<tr>";
                                            echo "<td>" . $d['nama_desain'] . "</td>";
                                            echo "<td>" . $d['deskripsi_desain'] . "</td>";
                                            echo "<td>";
                                            echo "<a href='desainCadangan-edit.php?id=" . $d['id_desain'] . "' class='btn btn-sm btn-warning'>Edit</a> ";
                                            echo "<a href='desainCadangan.php?hapus=" . $d['id_desain'] . "' class='btn btn-sm btn-danger' name='hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus desain ini?\")'>Hapus</a>";
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