<?php
session_start();
include 'koneksi.php'; // Include your database connection

// Get form input
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Escape input to prevent SQL injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Check if the user exists in the database
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // User found, start session
    $_SESSION['user'] = $username; // Store email in session
    header("Location: dashboard.php"); // Redirect to dashboard or desired page
} else {
    // User not found, redirect to login page with error
    header("Location: login.php?error=1");
}
exit();
