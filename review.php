<?php

// Include connection file
require_once 'koneksi.php';

// Initialize response array
$response = array('success' => false, 'message' => '');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get form data
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    // Validate form data
    if (empty($rating) || empty($review)) {
        $response['message'] = 'Please fill in all required fields.';
    } else {
        // Escape data to prevent SQL injection
        $rating = mysqli_real_escape_string($conn, $rating);
        $review = mysqli_real_escape_string($conn, $review);

        // Insert review into database
        $insertReviewQuery = "INSERT INTO ulasan (rating, review) VALUES ('$rating', '$review')";
        if (mysqli_query($conn, $insertReviewQuery)) {
            $response['success'] = true;
            $response['message'] = 'Review submitted successfully.';
        } else {
            $response['message'] = 'Failed to submit review. Error: ' . mysqli_error($conn);
        }
    }
}

echo json_encode($response);
?>
