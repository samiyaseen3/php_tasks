<?php


include 'db_connect.php'; 


$id = $_GET['id'];


$query = "UPDATE users SET deleted_at = NOW() WHERE user_id = $id";


if (mysqli_query($conn, $query)) {
   
    header('Location: view_users.php');
} else {
   
    echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
