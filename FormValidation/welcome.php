<?php
session_start();

// Check if the user is logged in by verifying the session
if (!isset($_SESSION['user'])) {
    // Redirect to login page if user is not logged in
    header('Location: log-in.php');
    exit();
}

$userEmail = $_SESSION['user']['email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Welcome!</h1>
    <p>Your email: <strong><?php echo htmlspecialchars($userEmail); ?></strong></p>
    <p>We're glad to have you here!</p>
    <a href="log-in.php" class="btn btn-danger">Log Out</a>
</div>
</body>
</html>
