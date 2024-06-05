<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "ohmynailart";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Fungsi untuk menambahkan data pelanggan
function tambahPelanggan($nama_pelanggan, $no_telp, $alamat, $email, $jenis_kelamin) {
    global $koneksi;
    $query = "INSERT INTO pelanggan (nama_pelanggan, no_telp, alamat, email, jenis_kelamin) VALUES ('$nama_pelanggan', '$no_telp', '$alamat', '$email', '$jenis_kelamin')";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk mengambil data pelanggan
function ambilPelanggan() {
    global $koneksi;
    $query = "SELECT id_pelanggan, nama_pelanggan, email, no_telp, alamat, jenis_kelamin FROM pelanggan";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mengubah data pelanggan
function ubahPelanggan($id_pelanggan, $nama_pelanggan, $email, $no_telp, $alamat, $jenis_kelamin) {
    global $koneksi;
    $query = "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', email='$email', no_telp='$no_telp', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE id_pelanggan=$id_pelanggan";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk menghapus data pelanggan
function hapusPelanggan($id_pelanggan) {
    global $koneksi;
    $query = "DELETE FROM pelanggan WHERE id_pelanggan=$id_pelanggan";
    mysqli_query($koneksi, $query);
}

// Proses tambah data pelanggan
if (isset($_POST['tambah'])) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    tambahPelanggan($nama_pelanggan, $email, $no_telp, $alamat, $jenis_kelamin);
    header("Location: pelanggan-list3.php");
    exit();
}

// Proses ubah data pelanggan
if (isset($_POST['ubah'])) {
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    ubahPelanggan($id_pelanggan, $nama_pelanggan, $email, $no_telp, $alamat, $jenis_kelamin);
    header("Location: pelanggan-list3.php");
    exit();
}

// Proses hapus data pelanggan
if (isset($_GET['hapus'])) {
    $id_pelanggan = $_GET['hapus'];
    hapusPelanggan($id_pelanggan);
    header("Location: pelanggan-list3.php");
    exit();
}
?>
