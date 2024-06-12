<?php
include 'koneksi.php';

// Ambil nama treatment yang dipilih dari permintaan AJAX
$treatment = $_GET['treatment'];

// Query untuk mendapatkan harga berdasarkan nama treatment
$query = "SELECT * FROM katalog_harga WHERE nama_treatment = '$treatment'";
$result = mysqli_query($conn, $query);

// Ambil harga dari hasil query
if ($row = mysqli_fetch_assoc($result)) {
    $harga = $row['harga'];
    echo $harga;
    return $harga;
} else {
    echo "0"; // Jika tidak ada harga yang ditemukan
}

mysqli_close($conn);
?>
