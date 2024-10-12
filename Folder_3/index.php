<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!isset($_SESSION["users"])) {
        $_SESSION["users"] = [];
    }

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $newUser = [
        "name" => $name,
        "email" => $email,
        "password" => $password,
    ];

    
    $_SESSION["users"][] = $newUser;

    header("Location: " . $_SERVER['PHP_SELF']);
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #userTable {
        display: none;
    }
    </style>
</head>

<body>


    <form method="POST">
        Name: <input type="text" name="name" required><br>
        E-mail: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Submit">
    </form>

    <br>


    <button id="toggleButton">Show User Data</button>


    <?php if (isset($_SESSION['users']) && count($_SESSION['users']) > 0): ?>
    <div id="userTable">
        <h2>Submitted Users:</h2>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php foreach ($_SESSION['users'] as $user): ?>
            <tr>
                <td><?php echo htmlspecialchars($user['name']); ?></td>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
                <td><?php echo htmlspecialchars($user['password']); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>


    <script>
    const toggleButton = document.getElementById("toggleButton");
    const userTable = document.getElementById("userTable");


    let Visible = false;


    toggleButton.addEventListener("click", function() {

        Visible = !Visible;


        if (Visible) {
            userTable.style.display = "block";
            toggleButton.textContent = "Hide User Data";
        } else {
            userTable.style.display = "none";
            toggleButton.textContent = "Show User Data";
        }
    });
    </script>

</body>

</html>