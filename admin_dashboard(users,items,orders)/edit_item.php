<?php
// edit_item.php

include 'db_connect.php'; // Include database connection

$id = $_GET['id'];
$query = "SELECT * FROM Item WHERE item_id = $id";
$result = mysqli_query($conn, $query);
$item = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST['item_description'];
    $image = $_POST['item_image'];
    $total_number = $_POST['item_total_number'];

    $query = "UPDATE Item SET item_description = '$description', item_image = '$image', item_total_number = $total_number WHERE item_id = $id";
    mysqli_query($conn, $query);

    header('Location: view_items.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Item</h1>
        <form method="POST">
            <div class="mb-3">
                <label>Description</label>
                <textarea name="item_description" class="form-control"><?= $item['item_description'] ?></textarea>
            </div>
            <div class="mb-3">
                <label>Image URL</label>
                <input type="text" name="item_image" class="form-control" value="<?= $item['item_image'] ?>">
            </div>
            <div class="mb-3">
                <label>Total Number</label>
                <input type="number" name="item_total_number" class="form-control" value="<?= $item['item_total_number'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update Item</button>
        </form>
    </div>
</body>
</html>
