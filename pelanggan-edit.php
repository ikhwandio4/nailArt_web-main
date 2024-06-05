<?php
require 'sidebar.php';
include 'koneksi.php';

// Assuming you have fetched the data and stored it in an associative array
$id = $_GET['id'];

$query = "SELECT * FROM pelanggan WHERE id_pelanggan = $id";
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
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
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
                            <h5 class="card-title fw-semibold mb-4">Forms</h5>
                            <div class="card">
                                <div class="card-body">
                                    <form action="pelanggan.php" method="POST">
                                        <input type="hidden" name="id_pelanggan" value="<?php echo htmlspecialchars($data['id_pelanggan'] ?? ''); ?>">
                                        <div class="mb-3">
                                            <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
                                            <input type="text" class="form-control" id="namaPelanggan" name="nama_pelanggan" aria-describedby="namaHelp" value="<?php echo htmlspecialchars($data['nama_pelanggan']); ?>">
                                            <div id="namaHelp" class="form-text">Masukkan nama pelanggan.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="noTelp" class="form-label">No Telp</label>
                                            <input type="text" class="form-control" id="noTelp" name="no_telp" aria-describedby="telpHelp" value="<?php echo htmlspecialchars($data['no_telp']); ?>">
                                            <div id="telpHelp" class="form-text">Masukkan nomor telepon pelanggan.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="alamatHelp" value="<?php echo htmlspecialchars($data['alamat']); ?>">
                                            <div id="alamatHelp" class="form-text">Masukkan alamat pelanggan.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo htmlspecialchars($data['email']); ?>">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" aria-describedby="jenis_kelamin">
                                                <option value="Laki-laki" <?php echo (isset($data['jenis_kelamin']) && $data['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                                <option value="Perempuan" <?php echo (isset($data['jenis_kelamin']) && $data['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                            </select>
                                            <div id="jenis_kelamin" class="form-text">Pilih jenis kelamin pelanggan.</div>
                                        </div>
                                        <button type="submit" name="ubah" class="btn btn-primary">Submit</button>
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