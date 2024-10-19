<?php


include 'db_connect.php'; 

$query = "SELECT * FROM Item WHERE deleted_at IS NULL";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Items</h1>
        <a href="create_item.php" class="btn btn-success mb-3">Add New Item</a>
        <a href="index.php" class="btn btn-success mb-3">Back</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Total Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $row['item_id'] ?></td>
                    <td><?= $row['item_description'] ?></td>
                    <td><img src="<?= $row['item_image'] ?>" width="50" height="50"></td>
                    <td><?= $row['item_total_number'] ?></td>
                    <td>
                        <a href="edit_item.php?id=<?= $row['item_id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="delete_item.php?id=<?= $row['item_id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
