<?php
require 'sidebar.php';
include 'koneksi.php';

// Assuming you have fetched the data and stored it in an associative array
$id = $_GET['id'];

$query = "SELECT * FROM desain_cadangan WHERE id_desain = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
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
                    
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Forms</h5>
                            <div class="card">
                                <div class="card-body">
                                <form action="desainCadangan.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_desain" value="<?php echo htmlspecialchars($data['id_desain'] ?? ''); ?>">
                                    <div class="mb-3">
                                        <label for="nama_desain" class="form-label">Nama Desain</label>
                                        <input type="text" class="form-control" id="nama_desain" name="nama_desain" aria-describedby="namaHelp" value="<?php echo htmlspecialchars($data['nama_desain']); ?>">
                                        <div id="namaHelp" class="form-text">Masukkan nama desain.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi_desain" class="form-label">Deskripsi Desain</label>
                                        <textarea class="form-control" id="deskripsi_desain" name="deskripsi_desain" aria-describedby="deskripsiHelp"><?php echo htmlspecialchars($data['deskripsi_desain']); ?></textarea>
                                        <div id="deskripsiHelp" class="form-text">Masukkan deskripsi desain.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar" class="form-label">Gambar Desain</label>
                                        <input type="file" class="form-control" id="gambar" name="gambar" aria-describedby="gambarHelp">
                                        <div id="gambarHelp" class="form-text">Unggah gambar desain (kosongkan jika tidak ingin mengubah).</div>
                                    </div>
                                    <button type="submit" name="ubah" class="btn btn-primary">Submit</button>
                                    <a href="desainCadangan-list.php" class="btn btn-secondary">Kembali</a>
                                </form>

                                </div>
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