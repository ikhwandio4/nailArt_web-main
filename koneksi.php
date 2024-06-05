
<?php
$servername = "localhost"; // Nama host
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi pengguna
$dbname = "ohmynailart"; // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";
?>
