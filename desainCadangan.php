<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "ohmynailart";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Fungsi untuk menambahkan data desain cadangan
function tambahDesain($nama_desain, $deskripsi_desain, $gambar)
{
    global $koneksi;
    $query = "INSERT INTO desain_cadangan (nama_desain, deskripsi_desain, gambar) VALUES ('$nama_desain', '$deskripsi_desain', '$gambar')";
    mysqli_query($koneksi, $query);
}
function ambilDesain()
{
global $koneksi;
$query = "SELECT id_desain, nama_desain, deskripsi_desain, gambar FROM desain_cadangan";
$result = mysqli_query($koneksi, $query);
return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mengambil data desain cadangan
function ambilDesain2()
{
    global $koneksi;
    // Query SQL dengan JOIN untuk menggabungkan tabel desain_cadangan dan katalog_harga
    $query = "
        SELECT d.id_desain, d.nama_desain, d.deskripsi_desain, d.gambar, k.harga 
        FROM desain_cadangan d 
        JOIN katalog_harga k ON d.id_desain = k.id_desain
    ";
    $result = mysqli_query($koneksi, $query);
    // Mengembalikan hasil query sebagai array asosiatif
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


function cariDesain($keyword)
{
    global $koneksi;
    // Escape the keyword to prevent SQL injection
    $keyword = mysqli_real_escape_string($koneksi, $keyword);

    // Query to search for customers
    $sql = "SELECT * FROM desain_cadangan WHERE nama_desain LIKE '%$keyword'";

    $result = mysqli_query($koneksi, $sql);

    $desain = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $desain[] = $row;
    }

    return $desain;
}

// Fungsi untuk mengubah data desain cadangan
function ubahDesain($id_desain, $nama_desain, $deskripsi_desain, $gambar)
{
    global $koneksi;
    $query = "UPDATE desain_cadangan SET nama_desain='$nama_desain', deskripsi_desain='$deskripsi_desain', gambar='$gambar' WHERE id_desain=$id_desain";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk menghapus data desain cadangan
function hapusDesain($id_desain)
{
    global $koneksi;

    // Start transaction
    mysqli_begin_transaction($koneksi);

    try {
        // Delete from related tables
        $queryPenjualan = "DELETE FROM penjualan WHERE id_desain=$id_desain";
        mysqli_query($koneksi, $queryPenjualan);

        $queryPemesanan = "DELETE FROM pemesanan WHERE id_desain=$id_desain";
        mysqli_query($koneksi, $queryPemesanan);

        $queryKatalogHarga = "DELETE FROM katalog_harga WHERE id_desain=$id_desain";
        mysqli_query($koneksi, $queryKatalogHarga);

        // Delete from desain_cadangan table
        $queryDesain = "DELETE FROM desain_cadangan WHERE id_desain=$id_desain";
        mysqli_query($koneksi, $queryDesain);

        // Commit transaction
        mysqli_commit($koneksi);

        echo "Data desain dan semua data terkait berhasil dihapus.";
    } catch (Exception $e) {
        // Rollback transaction if any query fails
        mysqli_rollback($koneksi);
        echo "Gagal menghapus data: " . $e->getMessage();
    }
}

// Proses tambah data desain cadangan
if (isset($_POST['tambah'])) {
    $nama_desain = $_POST['nama_desain'];
    $deskripsi_desain = $_POST['deskripsi_desain'];

    // Handling the image upload
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        $upload_dir = 'uploads/';
        // Check if the directory exists, if not, try to create it
        if (!is_dir($upload_dir)) {
            if (!mkdir($upload_dir, 0755, true)) {
                die("Failed to create upload directory.");
            }
        }
        $file_name = basename($_FILES['gambar']['name']);
        $target_file = $upload_dir . $file_name;

        // You can add checks here for file type, size, etc.
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
            // File uploaded successfully
            // Save the file path in your database
            $gambar_path = $target_file;
            tambahDesain($nama_desain, $deskripsi_desain, $gambar_path);
            echo "Data desain berhasil disimpan.";
        } else {
            // Handle upload error
            echo "Gagal mengunggah gambar.";
        }
    } else {
        echo "Tidak ada file gambar yang diunggah.";
    }
    header("Location: desainCadangan-list.php");
    exit();
}

// Proses ubah data desain cadangan
if (isset($_POST['ubah'])) {
    $id_desain = $_POST['id_desain'];
    $nama_desain = $_POST['nama_desain'];
    $deskripsi_desain = $_POST['deskripsi_desain'];
    $gambar = $_POST['gambar'];
    ubahDesain($id_desain, $nama_desain, $deskripsi_desain, $gambar);
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