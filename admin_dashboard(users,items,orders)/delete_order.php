<?php


include 'db_connect.php'; 


$id = $_GET['id'];


$query = "UPDATE `Order` SET deleted_at = NOW() WHERE order_id = $id";


if (mysqli_query($conn, $query)) {

    header('Location: view_orders.php');
} else {

    echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
