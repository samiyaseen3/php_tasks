<?php
// index.php

include 'db_connect.php'; // Include database connection

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Admin Dashboard</h1>
        <div class="list-group mt-3">
            <a href="view_users.php" class="list-group-item list-group-item-action">Manage Users</a>
            <a href="view_items.php" class="list-group-item list-group-item-action">Manage Items</a>
            <a href="view_orders.php" class="list-group-item list-group-item-action">Manage Orders</a>
        </div>
    </div>
</body>
</html>
