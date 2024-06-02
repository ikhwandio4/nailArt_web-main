<?php
// Include the database connection file
include 'koneksi.php';

// Get data from form
$nama_pelanggan = $_POST['nama_pelanggan'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$teks_ulasan = $_POST['teks_ulasan'];
$tanggal_ulasan = $_POST['tanggal_ulasan'];
$rating = $_POST['rating'];

// Check if the customer already exists
$sql_check_customer = "SELECT id_pelanggan FROM pelanggan WHERE nama_pelanggan = '$nama_pelanggan'";
$result = $conn->query($sql_check_customer);

if ($result->num_rows > 0) {
    // Customer exists, get id_pelanggan
    $row = $result->fetch_assoc();
    $id_pelanggan = $row['id_pelanggan'];
} else {
    // Customer does not exist, insert new customer
    $sql_insert_customer = "INSERT INTO pelanggan (nama_pelanggan, email, no_telp) VALUES ('$nama_pelanggan', '$email', '$no_telp')";
    if ($conn->query($sql_insert_customer) === TRUE) {
        $id_pelanggan = $conn->insert_id; // Get the newly created customer id
    } else {
        echo "Error: " . $sql_insert_customer . "<br>" . $conn->error;
        exit;
    }
}

// Insert review
$sql_insert_review = "INSERT INTO ulasan (id_pelanggan, teks_ulasan, tanggal_ulasan, rating) VALUES ('$id_pelanggan', '$teks_ulasan', '$tanggal_ulasan', '$rating')";

if ($conn->query($sql_insert_review) === TRUE) {
    echo "Ulasan berhasil ditambahkan.";
} else {
    echo "Error: " . $sql_insert_review . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
