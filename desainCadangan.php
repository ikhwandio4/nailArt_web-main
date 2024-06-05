<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "ohmynailart";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Fungsi untuk menambahkan data desain cadangan
function tambahDesain($nama_desain, $deskripsi_desain)
{
    global $koneksi;
    $query = "INSERT INTO desain_cadangan (nama_desain, deskripsi_desain) VALUES ('$nama_desain', '$deskripsi_desain')";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk mengambil data desain cadangan
function ambilDesain()
{
    global $koneksi;
    $query = "SELECT id_desain, nama_desain, deskripsi_desain FROM desain_cadangan";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mengubah data desain cadangan
function ubahDesain($id_desain, $nama_desain, $deskripsi_desain)
{
    global $koneksi;
    $query = "UPDATE desain_cadangan SET nama_desain='$nama_desain', deskripsi_desain='$deskripsi_desain' WHERE id_desain=$id_desain";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk menghapus data desain cadangan
function hapusDesain($id_desain)
{
    global $koneksi;
    $query = "DELETE FROM desain_cadangan WHERE id_desain=$id_desain";
    mysqli_query($koneksi, $query);
}

// Proses tambah data desain cadangan
if (isset($_POST['tambah'])) {
    $nama_desain = $_POST['nama_desain'];
    $deskripsi_desain = $_POST['deskripsi_desain'];
    tambahDesain($nama_desain, $deskripsi_desain);
    header("Location: desainCadangan-list.php");
    exit();
}

// Proses ubah data desain cadangan
if (isset($_POST['ubah'])) {
    $id_desain = $_POST['id_desain'];
    $nama_desain = $_POST['nama_desain'];
    $deskripsi_desain = $_POST['deskripsi_desain'];
    ubahDesain($id_desain, $nama_desain, $deskripsi_desain);
    header("Location: desainCadangan-list.php");
    exit();
}

// Proses hapus data desain cadangan
if (isset($_GET['hapus'])) {
    $id_desain = $_GET['hapus'];
    hapusDesain($id_desain);
    header("Location: desainCadangan-list.php");
    exit();
}
