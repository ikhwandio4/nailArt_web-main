<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "ohmynailart";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Fungsi untuk menambahkan data katalog harga
function tambahKatalog($id_desain, $nama_treatment, $harga)
{
    global $koneksi;
    $query = "INSERT INTO katalog_harga (id_desain, nama_treatment, harga) VALUES ('$id_desain', '$nama_treatment', '$harga')";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk mengambil data katalog harga
function ambilKatalog()
{
    global $koneksi;
    $query = "SELECT * FROM katalog_harga";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mengubah data katalog harga
function ubahKatalog($id_katalog, $id_desain, $nama_treatment, $harga)
{
    global $koneksi;
    $query = "UPDATE katalog_harga SET id_desain='$id_desain', nama_treatment='$nama_treatment', harga='$harga' WHERE id_katalog=$id_katalog";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk menghapus data katalog harga
function hapusKatalog($id_katalog)
{
    global $koneksi;
    $query = "DELETE FROM katalog_harga WHERE id_katalog=$id_katalog";
    mysqli_query($koneksi, $query);
}

// Proses tambah data katalog harga
if (isset($_POST['tambah'])) {
    $id_desain = $_POST['id_desain'];
    $nama_treatment = $_POST['nama_treatment'];
    $harga = $_POST['harga'];
    tambahKatalog($id_desain, $nama_treatment, $harga);
    header("Location: katalogHarga-list.php");
    exit();
}

// Proses ubah data katalog harga
if (isset($_POST['ubah'])) {
    $id_katalog = $_POST['id_katalog'];
    $id_desain = $_POST['id_desain'];
    $nama_treatment = $_POST['nama_treatment'];
    $harga = $_POST['harga'];
    ubahKatalog($id_katalog, $id_desain, $nama_treatment, $harga);
    header("Location: katalogHarga-list.php");
    exit();
}

// Proses hapus data katalog harga
if (isset($_GET['hapus'])) {
    $id_katalog = $_GET['hapus'];
    hapusKatalog($id_katalog);
    header("Location: katalogHarga-list.php");
    exit();
}
