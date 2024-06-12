<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="/Modernize-bootstrap-free-main/assets/css/styles.min.css" />
</head>

<body>
  <?php
  include 'koneksi.php';
  // Query untuk menghitung jumlah pelanggan
  $query = "SELECT COUNT(*) AS jumlah_pelanggan FROM pelanggan";
  $result = $conn->query($query);

  // Ambil hasil query
  $row = $result->fetch_assoc();
  $jumlah_pelanggan = $row['jumlah_pelanggan'];

  // Tutup koneksi
  $conn->close();

  // Memanggil file PHP yang berisi fungsi-fungsi
  require_once 'pelanggan.php';

  // Mengambil data pelanggan
  $pelanggan = ambilPelanggan();
  
  ?>
 <?php
// Mengambil data total desain dari desain_cadangan.php
include 'koneksi.php';
include 'desainCadangan.php';

$query_total_desain = "SELECT COUNT(*) AS total_desain FROM desain_cadangan";
$result_total_desain = $conn->query($query_total_desain);
$row_total_desain = $result_total_desain->fetch_assoc();
$total_desain = $row_total_desain['total_desain'];

// Mengambil data total penjualan dari penjualan.php
include 'penjualan.php';

$query_total_penjualan = "SELECT COUNT(*) AS total_penjualan FROM penjualan";
$result_total_penjualan = $conn->query($query_total_penjualan);
$row_total_penjualan = $result_total_penjualan->fetch_assoc();
$total_penjualan = $row_total_penjualan['total_penjualan'];

$conn->close(); // Menutup koneksi setelah selesai mengambil data
?>
  

  <?php
  require 'sidebar.php';
  ?>
  <div class="body-wrapper">
    <!--  Header Start -->
    <!-- Header code here -->
    <!--  Header End -->
    <div class="container-fluid">
      <!--  Row 1 -->
      <div class="row">
        <div class="col-lg-8 d-flex">
          <div class="card flex-fill">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Total Desain</h5>
              <h4 class="fw-semibold mb-3"><?php echo $total_desain; ?></h4>
              <!-- Yearly Breakup card content here -->
              <div class="d-flex align-items-center pb-1">
                <span class="me-2 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                  <i class="ti ti-arrow-up-right text-success"></i>
                </span>
              </div>
              <div class="d-flex justify-content-end">
                <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                  <i class="ti ti-typography"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="card flex-fill ms-4">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Total Penjualan</h5>
              <h4 class="fw-semibold mb-3"><?php echo $total_penjualan; ?></h4>
              <!-- Monthly Earnings card content here -->
              <div class="d-flex align-items-center pb-1">
                <span class="me-2 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                  <i class="ti ti-arrow-up-right text-success"></i>
                </span>
              </div>
              <div class="d-flex justify-content-end">
                <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                  <i class="ti ti-shopping-cart fs-6"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Total Pelanggan</h5>
              <h4 class="fw-semibold mb-3"><?php echo $jumlah_pelanggan; ?></h4>
              <div class="d-flex align-items-center pb-1">
                <span class="me-2 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                  <i class="ti ti-arrow-up-right text-success"></i>
                </span>
              </div>
              <div class="d-flex justify-content-end">
                <div class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                  <i class="ti ti-users fs-6"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4">Daftar Pelanggan</h5>
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No. Telp</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Alamat</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $counter = 1; // Initialize counter
                    foreach ($pelanggan as $p) :
                    ?>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0"><?php echo $counter++; ?></h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1"><?php echo $p['nama_pelanggan']; ?></h6>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $p['no_telp']; ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?php echo $p['alamat']; ?></p>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <script src="/Modernize-bootstrap-free-main/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="/Modernize-bootstrap-free-main/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/Modernize-bootstrap-free-main/assets/js/sidebarmenu.js"></script>
  <script src="/Modernize-bootstrap-free-main/assets/js/app.min.js"></script>
  <script src="/Modernize-bootstrap-free-main/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="/Modernize-bootstrap-free-main/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="/Modernize-bootstrap-free-main/assets/js/dashboard.js"></script>
</body>

</html>