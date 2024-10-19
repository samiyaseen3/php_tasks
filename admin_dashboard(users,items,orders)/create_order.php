<?php
// create_order.php

include 'db_connect.php'; // Include database connection

// Fetch users and items to populate the dropdowns
$users_query = "SELECT user_id, user_name FROM users WHERE deleted_at IS NULL";
$users_result = mysqli_query($conn, $users_query);

$items_query = "SELECT item_id, item_description FROM Item WHERE deleted_at IS NULL";
$items_result = mysqli_query($conn, $items_query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_order_id = $_POST['user_order_id'];
    $user_item_order_id = $_POST['user_item_order_id'];

    // Insert the new order into the database
    $query = "INSERT INTO `Order` (user_order_id, user_item_order_id) VALUES ($user_order_id, $user_item_order_id)";
    
    if (mysqli_query($conn, $query)) {
        header('Location: view_orders.php'); // Redirect to view orders
    } else {
        echo "Error: " . mysqli_error($conn); // Display error if any
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Add New Order</h1>
        <form method="POST">
            <div class="mb-3">
                <label>User:</label>
                <select name="user_order_id" class="form-control" required>
                    <option value="">Select User</option>
                    <?php while ($user = mysqli_fetch_assoc($users_result)) { ?>
                        <option value="<?= $user['user_id'] ?>"><?= $user['user_name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label>Item:</label>
                <select name="user_item_order_id" class="form-control" required>
                    <option value="">Select Item</option>
                    <?php while ($item = mysqli_fetch_assoc($items_result)) { ?>
                        <option value="<?= $item['item_id'] ?>"><?= $item['item_description'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Add Order</button>
            <a href="view_orders.php" class="btn btn-success">Back</a>
        </form>
    </div>
</body>
</html>
