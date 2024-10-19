<?php
// delete_user.php

include 'db_connect.php'; // Include database connection

// Get user ID from URL
$id = $_GET['id'];

// Prepare the SQL statement to perform the soft delete
$query = "UPDATE users SET deleted_at = NOW() WHERE user_id = $id";

// Execute the query
if (mysqli_query($conn, $query)) {
    // Redirect to the users view page after deletion
    header('Location: view_users.php');
} else {
    // Handle error if the query fails
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
