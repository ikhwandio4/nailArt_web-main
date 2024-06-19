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
function ambilPenjualan() {
    global $koneksi;
    $query = "
        SELECT 
            penjualan.id_penjualan, 
            pelanggan.nama_pelanggan,
            desain_cadangan.nama_desain, 
            penjualan.tanggal_pemesanan, 
            penjualan.waktu_pemesanan, 
            penjualan.jumlah, 
            penjualan.harga_total,
            penjualan.status
        FROM 
            penjualan
        JOIN
            pelanggan ON penjualan.id_pelanggan = pelanggan.id_pelanggan
        JOIN
            desain_cadangan ON penjualan.id_desain = desain_cadangan.id_desain
        ORDER BY 
            penjualan.tanggal_pemesanan DESC
    ";
    $result = mysqli_query($koneksi, $query);
    $penjualan = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $penjualan[] = $row;
        }
    }
    return $penjualan;
}

// Fungsi untuk mengambil detail penjualan berdasarkan id
function ambilDetailPenjualan($id_penjualan) {
    global $koneksi;
    $id_penjualan = mysqli_real_escape_string($koneksi, $id_penjualan);
    $query = "
        SELECT 
            penjualan.id_penjualan, 
            pelanggan.nama_pelanggan,
            desain_cadangan.nama_desain, 
            penjualan.tanggal_pemesanan, 
            penjualan.waktu_pemesanan, 
            penjualan.jumlah, 
            penjualan.harga_total,
            penjualan.status
        FROM 
            penjualan
        JOIN
            pelanggan ON penjualan.id_pelanggan = pelanggan.id_pelanggan
        JOIN
            desain_cadangan ON penjualan.id_desain = desain_cadangan.id_desain
        WHERE 
            penjualan.id_penjualan = '$id_penjualan'
    ";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_assoc($result);
}
function ambilPenjualanById($id_penjualan)
{
    global $conn;
    $query = "SELECT * FROM penjualan WHERE id_penjualan = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id_penjualan);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $penjualan = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    return $penjualan;
}

// Fungsi untuk mengubah data penjualan
function ubahPenjualan($id_penjualan, $id_pelanggan, $id_desain, $tanggal_penjualan, $nama_treatment)
{
    global $koneksi;
    $query = "UPDATE penjualan SET id_pelanggan='$id_pelanggan', id_desain='$id_desain', tanggal_penjualan='$tanggal_penjualan', nama_treatment='$nama_treatment' WHERE id_penjualan=$id_penjualan";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk menghapus data penjualan
function hapusPenjualan($id_penjualan)
{
    global $koneksi;
    $query = "DELETE FROM penjualan WHERE id_penjualan=$id_penjualan";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk mengupdate status penjualan
function ubahStatusPenjualan($id_penjualan, $new_status) {
    global $koneksi;
    $query = "UPDATE penjualan SET status='$new_status' WHERE id_penjualan=$id_penjualan";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk mencari data penjualan berdasarkan kata kunci
function cariPenjualan($search) {
    global $koneksi;
    $search = mysqli_real_escape_string($koneksi, $search);
    $query = "
        SELECT 
            penjualan.id_penjualan, 
            pelanggan.nama_pelanggan,
            desain_cadangan.nama_desain, 
            penjualan.tanggal_pemesanan, 
            penjualan.waktu_pemesanan, 
            penjualan.jumlah, 
            penjualan.harga_total,
            penjualan.status
        FROM 
            penjualan
        JOIN
            pelanggan ON penjualan.id_pelanggan = pelanggan.id_pelanggan
        JOIN
            desain_cadangan ON penjualan.id_desain = desain_cadangan.id_desain
        WHERE 
            penjualan.id_penjualan LIKE '%$search%' OR 
            pelanggan.nama_pelanggan LIKE '%$search%' OR 
            desain_cadangan.nama_desain LIKE '%$search%' OR 
            penjualan.tanggal_pemesanan LIKE '%$search%' OR 
            penjualan.waktu_pemesanan LIKE '%$search%' OR 
            penjualan.jumlah LIKE '%$search%' OR 
            penjualan.harga_total LIKE '%$search%' OR
            penjualan.status LIKE '%$search%'
        ORDER BY 
            penjualan.tanggal_pemesanan DESC
    ";
    $result = mysqli_query($koneksi, $query);
    $penjualan = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $penjualan[] = $row;
        }
    }
    return $penjualan;
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
