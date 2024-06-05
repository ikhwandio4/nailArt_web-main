<?php
include 'koneksi.php';

include 'koneksi.php';

// Fetch ulasan from database
$query = "SELECT nama_pelanggan, teks_ulasan, tanggal_ulasan FROM ulasan";
$result = $conn->query($query);

$ulasans = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ulasans[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($ulasans);
?>
