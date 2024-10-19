<?php

include 'db_connect.php'; 

$id = $_GET['id'];
$query = "UPDATE Item SET deleted_at = NOW() WHERE item_id = $id";
mysqli_query($conn, $query);

header('Location: view_items.php');
?>
