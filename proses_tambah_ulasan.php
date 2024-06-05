<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $teks_ulasan = $_POST['teks_ulasan'];
    $tanggal_ulasan = $_POST['tanggal_ulasan'];
    $rating = $_POST['rating'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];

    // Buat query untuk memasukkan data
    $sql = "INSERT INTO ulasan (teks_ulasan, tanggal_ulasan, rating, nama_pelanggan, email, no_telp) VALUES ('$teks_ulasan', '$tanggal_ulasan', '$rating', '$nama_pelanggan', '$email', '$no_telp')";

    if ($conn->query($sql) === TRUE) {
        echo "Ulasan berhasil dikirim!";
        header("Location: index.php"); // Redirect ke halaman index.php
        exit(); // Pastikan tidak ada kode lain yang dieksekusi setelah redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    if ($conn->query($query) === TRUE) {
        echo json_encode([
            'success' => true,
            'testimonial' => [
                'nama_pelanggan' => $nama_pelanggan,
                'teks_ulasan' => $teks_ulasan,
                'tanggal_ulasan' => $tanggal_ulasan
            ]
        ]);
    } else {
        echo json_encode(['success' => false]);
    }

    // Menutup koneksi
    $conn->close();
}
?>