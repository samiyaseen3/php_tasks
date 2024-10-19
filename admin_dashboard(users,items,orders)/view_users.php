<?php
// view_users.php

include 'db_connect.php'; // Include database connection

// Fetch users that are not marked as deleted
$query = "SELECT * FROM users WHERE deleted_at IS NULL";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Users</h1>
        <a href="create_user.php" class="btn btn-success mb-3">Add New User</a>
        <a href="index.php" class="btn btn-success mb-3">Back</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $row['user_id'] ?></td>
                    <td><?= $row['user_name'] ?></td>
                    <td><?= $row['user_mobile'] ?></td>
                    <td><?= $row['user_email'] ?></td>
                    <td><?= $row['user_address'] ?></td>
                    <td>
                        <a href="edit_user.php?id=<?= $row['user_id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="delete_user.php?id=<?= $row['user_id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
