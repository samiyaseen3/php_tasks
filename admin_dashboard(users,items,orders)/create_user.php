<?php


include 'db_connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['user_name'];
    $mobile = $_POST['user_mobile'];
    $email = $_POST['user_email'];
    $address = $_POST['user_address'];


    $query = "INSERT INTO users (user_name, user_mobile, user_email, user_address) VALUES ('$name', '$mobile', '$email', '$address')";

    if (mysqli_query($conn, $query)) {
        header('Location: view_users.php'); 
    } else {
        echo "Error: " . mysqli_error($conn); 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Add New User</h1>
        <form method="POST">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="user_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" name="user_mobile" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="user_email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Address</label>
                <textarea name="user_address" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add User</button>
            <a href="view_users.php" class="btn btn-danger">Back</a>
        </form>
    </div>
</body>
</html>
