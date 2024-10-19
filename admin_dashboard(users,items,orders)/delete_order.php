<?php
// delete_order.php

include 'db_connect.php'; // Include database connection

// Get the order ID from the URL parameter
$id = $_GET['id'];

// Prepare the SQL statement to perform the soft delete
$query = "UPDATE `Order` SET deleted_at = NOW() WHERE order_id = $id";

// Execute the query
if (mysqli_query($conn, $query)) {
    // Redirect to the orders view page after deletion
    header('Location: view_orders.php');
} else {
    // Handle error if the query fails
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
