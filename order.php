<?php

// Include connection file
require_once 'koneksi.php';

// Check if form is submitted
if (isset($_POST['submit'])) {

  // Get form data
  $customerName = $_POST['customerName'];
  $phoneNumber = $_POST['phoneNumber'];
  $address = $_POST['address'];
  $treatment = $_POST['treatment'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $totalPrice = $quantity * $price;

  // Validate form data (optional, you can add more validation as needed)
  if (empty($customerName) || empty($phoneNumber) || empty($address) || empty($treatment) || empty($quantity) || empty($price)) {
    $errorMsg = "Please fill in all required fields.";
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
        $errorMsg = "Error creating customer: " . mysqli_error($conn);
      }
    }

    // Get design ID based on treatment name
    $designQuery = "SELECT id_desain FROM katalog_harga WHERE nama_treatment = '$treatment'";
    $designResult = mysqli_query($conn, $designQuery);

    if (mysqli_num_rows($designResult) > 0) {
      // Design exists, fetch design ID
      $designRow = mysqli_fetch_assoc($designResult);
      $designId = $designRow['id_desain'];

      // Insert data into penjualan table
      $insertOrderQuery = "INSERT INTO penjualan (id_pelanggan, id_desain, tanggal_penjualan, nama_treatment) 
                           VALUES ($customerId, $designId, NOW(), '$treatment')";

      if (mysqli_query($conn, $insertOrderQuery)) {
        $successMsg = "Order submitted successfully!";
      } else {
        $errorMsg = "Error submitting order: " . mysqli_error($conn);
      }
    } else {
      $errorMsg = "Design not found.";
    }
  }
}

// Close connection
mysqli_close($conn);
header("Location: index.php");
exit;
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Form Processing</title>
</head>
<body> -->

<?php
// Display success or error message (if any)
// if (isset($successMsg)) {
//   echo "<p style='color: green;'>$successMsg</p>";
// } else if (isset($errorMsg)) {
//   echo "<p style='color: red;'>$errorMsg</p>";
// }
?>

<script>
//   window.onload = function() {
//     setTimeout(function() {
//       window.location.href = "index.php"; // Replace with your form page URL
//     }, 2000); // Redirect after 2 seconds
//   }
</script>
</body>
</html>
