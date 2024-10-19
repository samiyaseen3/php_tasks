<?php
// edit_user.php

include 'db_connect.php'; // Include database connection

// Get user ID from URL
$id = $_GET['id'];

// Fetch user data for the specified ID
$query = "SELECT * FROM users WHERE user_id = $id";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user data from the form
    $name = $_POST['user_name'];
    $mobile = $_POST['user_mobile'];
    $email = $_POST['user_email'];
    $address = $_POST['user_address'];

    // Update user in the database
    $query = "UPDATE users SET user_name = '$name', user_mobile = '$mobile', user_email = '$email', user_address = '$address' WHERE user_id = $id";

    if (mysqli_query($conn, $query)) {
        header('Location: view_users.php'); // Redirect to users view
    } else {
        echo "Error: " . mysqli_error($conn); // Display error if any
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit User</h1>
        <form method="POST">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="user_name" class="form-control" value="<?= $user['user_name'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" name="user_mobile" class="form-control" value="<?= $user['user_mobile'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="user_email" class="form-control" value="<?= $user['user_email'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Address</label>
                <textarea name="user_address" class="form-control" required><?= $user['user_address'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
</body>
</html>
