<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "ohmynailart";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Fungsi untuk menambahkan data pemesanan
function tambahPemesanan($id_pelanggan, $tanggal_pemesanan, $waktu_pemesanan, $id_desain)
{
    global $koneksi;
    $query = "INSERT INTO pemesanan (id_pelanggan, tanggal_pemesanan, waktu_pemesanan, id_desain) VALUES ('$id_pelanggan', '$tanggal_pemesanan', '$waktu_pemesanan', '$id_desain')";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk mengambil data pemesanan
function ambilPemesanan()
{
    global $koneksi;
    $query = "SELECT id_pemesanan, id_pelanggan, tanggal_pemesanan, waktu_pemesanan, id_desain FROM pemesanan";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function cariPemesanan($keyword)
{
    global $koneksi;
    // Escape the keyword to prevent SQL injection
    $keyword = mysqli_real_escape_string($koneksi, $keyword);

    // Query to search for customers
    $sql = "SELECT * FROM pemesanan WHERE id_pelanggan LIKE '%$keyword%' OR tanggal_pemesanan LIKE '%$keyword%' OR waktu_pemesanan LIKE '%$keyword%' OR id_desain LIKE '%$keyword%'";

    $result = mysqli_query($koneksi, $sql);

    $pemesanan = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $pemesanan[] = $row;
    }

    return $pemesanan;
}

// Fungsi untuk mengubah data pemesanan
function ubahPemesanan($id_pemesanan, $id_pelanggan, $tanggal_pemesanan, $waktu_pemesanan, $id_desain)
{
    global $koneksi;
    $query = "UPDATE pemesanan SET id_pelanggan='$id_pelanggan', tanggal_pemesanan='$tanggal_pemesanan', waktu_pemesanan='$waktu_pemesanan', id_desain='$id_desain' WHERE id_pemesanan=$id_pemesanan";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk menghapus data pemesanan
function hapusPemesanan($id_pemesanan)
{
    global $koneksi;
    $query = "DELETE FROM pemesanan WHERE id_pemesanan=$id_pemesanan";
    mysqli_query($koneksi, $query);
}

// Proses tambah data pemesanan
if (isset($_POST['tambah'])) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
    $waktu_pemesanan = $_POST['waktu_pemesanan'];
    $id_desain = $_POST['id_desain'];
    tambahPemesanan($id_pelanggan, $tanggal_pemesanan, $waktu_pemesanan, $id_desain);
    header("Location: pemesanan-list.php");
    exit();
}

// Proses ubah data pemesanan
if (isset($_POST['ubah'])) {
    $id_pemesanan = $_POST['id_pemesanan'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
    $waktu_pemesanan = $_POST['waktu_pemesanan'];
    $id_desain = $_POST['id_desain'];
    ubahPemesanan($id_pemesanan, $id_pelanggan, $tanggal_pemesanan, $waktu_pemesanan, $id_desain);
    header("Location: pemesanan-list.php");
    exit();
}

// Proses hapus data pemesanan
if (isset($_GET['hapus'])) {
    $id_pemesanan = $_GET['hapus_pemesanan'];
    hapusPemesanan($id_pemesanan);
    header("Location: pemesanan-list.php");
    exit();
}