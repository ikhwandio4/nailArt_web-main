
<?php

require 'sidebar.php';

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./Modernize-bootstrap-free-main/src/assets/css/styles.min.css" />

</head>

<body>
<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Forms</h5>
              <div class="card">
                <div class="card-body">
                <form>
                <div class="mb-3">
                    <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="namaPelanggan" aria-describedby="namaHelp">
                    <div id="namaHelp" class="form-text">Masukkan nama pelanggan.</div>
                </div>
                <div class="mb-3">
                    <label for="noTelp" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="noTelp" aria-describedby="telpHelp">
                    <div id="telpHelp" class="form-text">Masukkan nomor telepon pelanggan.</div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" aria-describedby="alamatHelp">
                    <div id="alamatHelp" class="form-text">Masukkan alamat pelanggan.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./Modernize-bootstrap-free-main/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="./Modernize-bootstrap-free-main/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./Modernize-bootstrap-free-main/assets/js/sidebarmenu.js"></script>
    <script src="./Modernize-bootstrap-free-main/assets/js/app.min.js"></script>
    <script src="./Modernize-bootstrap-free-main/assets/libs/simplebar/dist/simplebar.js"></script>
</div>   
</body>


