<?php
// Include connection file
require_once 'koneksi.php';

// Initialize response array
$response = array('success' => false, 'message' => '');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form data and sanitize inputs
    $customerName = mysqli_real_escape_string($conn, $_POST['customerName']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $productId = (int)$_POST['productId'];
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $productPrice = (float)$_POST['productPrice'];
    $quantity = (int)$_POST['quantity'];
    $price = (float)$_POST['price'];
    $orderTime = date('Y-m-d H:i:s'); // Current date and time

    // Validate form data
    if (empty($customerName) || empty($phoneNumber) || empty($address) || empty($productId) || empty($productName) || empty($productPrice) || empty($quantity) || empty($price)) {
        $response['message'] = "Please fill in all required fields.";
    } else {

        // Check if customer exists
        $customerQuery = "SELECT id_pelanggan FROM pelanggan WHERE nama_pelanggan = '$customerName' AND no_telp = '$phoneNumber' AND alamat = '$address'";
        $customerResult = mysqli_query($conn, $customerQuery);

        if (mysqli_num_rows($customerResult) > 0) {
            // Customer exists, fetch customer ID
            $customerRow = mysqli_fetch_assoc($customerResult);
            $customerId = $customerRow['id_pelanggan'];
        } else {
            // Customer does not exist, create new customer
            $insertCustomerQuery = "INSERT INTO pelanggan (nama_pelanggan, no_telp, alamat) VALUES ('$customerName', '$phoneNumber', '$address')";
            if (mysqli_query($conn, $insertCustomerQuery)) {
                $customerId = mysqli_insert_id($conn);
            } else {
                $response['message'] = "Error creating customer: " . mysqli_error($conn);
            }
        }

        if (isset($customerId)) {
            // Insert data into penjualan table
            $insertOrderQuery = "INSERT INTO penjualan (id_pelanggan, id_desain, tanggal_pemesanan, waktu_pemesanan, jumlah, harga_total) 
                                 VALUES ($customerId, $productId, CURDATE(), '$orderTime', $quantity, $price)";

            if (mysqli_query($conn, $insertOrderQuery)) {
                // Get the inserted penjualan ID
                $penjualanId = mysqli_insert_id($conn);

                // Insert data into pemesanan table
                $insertPemesananQuery = "INSERT INTO pemesanan (id_pemesanan, id_pelanggan, tanggal_pemesanan, waktu_pemesanan, id_desain)
                                         VALUES ($penjualanId, $customerId, CURDATE(), '$orderTime', $productId)";
                
                if (mysqli_query($conn, $insertPemesananQuery)) {
                    $response['success'] = true;
                    $response['message'] = "Order and pemesanan submitted successfully!";
                } else {
                    $response['message'] = "Error submitting pemesanan: " . mysqli_error($conn);
                }
            } else {
                $response['message'] = "Error submitting order: " . mysqli_error($conn);
            }
        }
    }
} else {
    $response['message'] = "Invalid request method.";
}

// Close connection
mysqli_close($conn);

// Send response as JSON
header('Content-Type: application/json');
echo json_encode($response);

?>
