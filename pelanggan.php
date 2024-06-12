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

function cariPelanggan($keyword)
{
    global $koneksi;
    // Escape the keyword to prevent SQL injection
    $keyword = mysqli_real_escape_string($koneksi, $keyword);

    // Query to search for customers
    $sql = "SELECT * FROM pelanggan WHERE nama_pelanggan LIKE '%$keyword%' OR email LIKE '%$keyword%' OR no_telp LIKE '%$keyword%'";

    $result = mysqli_query($koneksi, $sql);

    $pelanggan = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $pelanggan[] = $row;
    }

    return $pelanggan;
}
// Fungsi untuk mengambil data pelanggan
function ambilPelanggan()
{
    global $koneksi;
    // Query to retrieve all customers
    $sql = "SELECT * FROM pelanggan";

    $result = mysqli_query($koneksi, $sql);

    $pelanggan = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $pelanggan[] = $row;
    }

    return $pelanggan;
}

// Fungsi untuk mengubah data pelanggan
function ubahPelanggan($id_pelanggan, $nama_pelanggan, $no_telp, $alamat,$email, $jenis_kelamin) {
    global $koneksi;
    $query = "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', no_telp='$no_telp', alamat='$alamat', email='$email', jenis_kelamin='$jenis_kelamin' WHERE id_pelanggan=$id_pelanggan";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk menghapus data pelanggan
function hapusPelanggan($id_pelanggan)
{
    global $koneksi;

    // Start transaction
    mysqli_begin_transaction($koneksi);

    try {
        // Delete from related tables
        $queryPemesanan = "DELETE FROM pemesanan WHERE id_pelanggan=$id_pelanggan";
        mysqli_query($koneksi, $queryPemesanan);

        $queryPenjualan = "DELETE FROM penjualan WHERE id_pelanggan=$id_pelanggan";
        mysqli_query($koneksi, $queryPenjualan);

        $queryUlasan = "DELETE FROM ulasan WHERE id_pelanggan=$id_pelanggan";
        mysqli_query($koneksi, $queryUlasan);

        // Delete from pelanggan table
        $queryPelanggan = "DELETE FROM pelanggan WHERE id_pelanggan=$id_pelanggan";
        mysqli_query($koneksi, $queryPelanggan);

        // Commit transaction
        mysqli_commit($koneksi);

        echo "Data pelanggan dan semua data terkait berhasil dihapus.";
    } catch (Exception $e) {
        // Rollback transaction if any query fails
        mysqli_rollback($koneksi);
        echo "Gagal menghapus data: " . $e->getMessage();
    }
}

// Proses tambah data pelanggan
if (isset($_POST['tambah'])) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    tambahPelanggan($nama_pelanggan,$no_telp,$alamat, $email, $jenis_kelamin);
    header("Location: pelanggan-list.php");
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
    ubahPelanggan($id_pelanggan, $nama_pelanggan, $no_telp, $alamat,$email, $jenis_kelamin);
    header("Location: pelanggan-list.php");
    exit();
}

// Proses hapus data pelanggan
if (isset($_GET['hapus'])) {
    $id_pelanggan = $_GET['hapus'];
    hapusPelanggan($id_pelanggan);
    header("Location: pelanggan-list.php");
    exit();
}
?>
