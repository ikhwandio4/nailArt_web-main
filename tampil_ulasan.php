<?php
// Include the database connection file
include 'koneksi.php';

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch testimonials from the database
$sql = "SELECT nama_pelanggan, teks_ulasan FROM ulasan ORDER BY tanggal_ulasan DESC";
$result = $conn->query($sql);

// Check if there are any testimonials
$testimonials = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $testimonials[] = $row;
    }
}

// Close the connection after fetching data
$conn->close();
?>