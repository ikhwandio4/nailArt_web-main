<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "ohmynailart";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Fungsi untuk menambahkan data penjualan
function tambahPenjualan($id_pelanggan, $id_desain, $tanggal_penjualan, $nama_treatment)
{
    global $koneksi;
    $query = "INSERT INTO penjualan (id_pelanggan, id_desain, tanggal_penjualan, nama_treatment) VALUES ('$id_pelanggan', '$id_desain', '$tanggal_penjualan', '$nama_treatment')";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk mengambil data penjualan
function ambilPenjualan()
{
    global $koneksi;
    $query = "SELECT p.id_penjualan, pel.nama_pelanggan, cd.nama_desain, p.tanggal_penjualan, p.nama_treatment
              FROM penjualan p
              JOIN pelanggan pel ON p.id_pelanggan = pel.id_pelanggan
              JOIN desain_cadangan cd ON p.id_desain = cd.id_desain";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mengubah data penjualan
function ubahPenjualan($id_penjualan, $id_pelanggan, $id_desain, $tanggal_penjualan, $nama_treatment)
{
    global $koneksi;
    $query = "UPDATE penjualan SET id_pelanggan='$id_pelanggan', id_desain='$id_desain', tanggal_penjualan='$tanggal_penjualan', nama_treatment='$nama_treatment' WHERE id_penjualan=$id_penjualan";
    mysqli_query($koneksi, $query);
}

function cariPenjualan($keyword)
{
    global $koneksi;
    // Escape the keyword to prevent SQL injection
    $keyword = mysqli_real_escape_string($koneksi, $keyword);

    // Query to search for customers
    $sql = "SELECT p.id_penjualan, pel.nama_pelanggan, cd.nama_desain, p.tanggal_penjualan, p.nama_treatment
              FROM penjualan p
              JOIN pelanggan pel ON p.id_pelanggan = pel.id_pelanggan
              JOIN desain_cadangan cd ON p.id_desain = cd.id_desain
              WHERE tanggal_penjualan LIKE '%$keyword%' OR nama_treatment LIKE '%$keyword'";

    $result = mysqli_query($koneksi, $sql);

    $penjualan = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $penjualan[] = $row;
    }

    return $penjualan;
}
// Fungsi untuk menghapus data penjualan
function hapusPenjualan($id_penjualan)
{
    global $koneksi;
    $query = "DELETE FROM penjualan WHERE id_penjualan=$id_penjualan";
    mysqli_query($koneksi, $query);
}

// Proses tambah data penjualan
if (isset($_POST['tambah'])) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $id_desain = $_POST['id_desain'];
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $nama_treatment = $_POST['nama_treatment'];
    tambahPenjualan($id_pelanggan, $id_desain, $tanggal_penjualan, $nama_treatment);
    header("Location: penjualan-list.php");
    exit();
}

// Proses ubah data penjualan
if (isset($_POST['ubah'])) {
    $id_penjualan = $_POST['id_penjualan'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $id_desain = $_POST['id_desain'];
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $nama_treatment = $_POST['nama_treatment'];
    ubahPenjualan($id_penjualan, $id_pelanggan, $id_desain, $tanggal_penjualan, $nama_treatment);
    header("Location: penjualan-list.php");
    exit();
}

// Proses hapus data penjualan
if (isset($_GET['hapus'])) {
    $id_penjualan = $_GET['hapus'];
    hapusPenjualan($id_penjualan);
    header("Location: penjualan-list.php");
    exit();
}
