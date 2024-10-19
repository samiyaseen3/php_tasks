<?php


include 'db_connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $description = $_POST['item_description'];
    $total_number = $_POST['item_total_number'];

 
    $target_dir = "uploads/"; 


    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true); 
    }

    $target_file = $target_dir . basename($_FILES["item_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    $check = getimagesize($_FILES["item_image"]["tmp_name"]);
    if ($check === false) {
        $uploadOk = 0;
        $error_message = "File is not an image.";
    }


    if (file_exists($target_file)) {
        $uploadOk = 0;
        $error_message = "Sorry, file already exists.";
    }


    if ($_FILES["item_image"]["size"] > 2000000) {
        $uploadOk = 0;
        $error_message = "Sorry, your file is too large.";
    }


    if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        $uploadOk = 0;
        $error_message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }


    if ($uploadOk == 0) {
        echo "<div class='alert alert-danger'>$error_message</div>";
    } else {

        if (move_uploaded_file($_FILES["item_image"]["tmp_name"], $target_file)) {

            $stmt = $conn->prepare("INSERT INTO Item (item_description, item_image, item_total_number) VALUES (?, ?, ?)");
            $stmt->bind_param("ssi", $description, $target_file, $total_number);

            if ($stmt->execute()) {
                header('Location: view_items.php'); 
                exit;
            } else {
                echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>"; 
            }
            $stmt->close();
        } else {
            echo "<div class='alert alert-danger'>Sorry, there was an error uploading your file. ";
            echo "Target file: " . $target_file; 
            echo "Error: " . print_r(error_get_last(), true) . "</div>"; 
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Add New Item</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Description</label>
                <input type="text" name="item_description" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Total Number</label>
                <input type="number" name="item_total_number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="item_image" class="form-control" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-success">Add Item</button>
            <a href="view_items.php" class="btn btn-success">Back</a>
        </form>
    </div>
</body>
</html>
