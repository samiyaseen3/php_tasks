<?php


include 'db_connect.php'; 

$query = "SELECT * FROM `Order` WHERE deleted_at IS NULL";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Orders</h1>
        <a href="create_order.php" class="btn btn-success mb-3">Add New Order</a>
        <a href="index.php" class="btn btn-success mb-3">Back</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Item ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $row['order_id'] ?></td>
                    <td><?= $row['user_order_id'] ?></td>
                    <td><?= $row['user_item_order_id'] ?></td>
                    <td>
                        <a href="edit_order.php?id=<?= $row['order_id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="delete_order.php?id=<?= $row['order_id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
