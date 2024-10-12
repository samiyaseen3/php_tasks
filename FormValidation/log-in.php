<?php
session_start();

// Initialize an empty array to hold errors
$errors = [];

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simulated user data from session (replace this with actual data from your database)
    if (isset($_SESSION['registered_user'])) {
        $userData = $_SESSION['registered_user']; // Get stored user data from sign-up
    } else {
        $userData = []; // No registered users
    }

    // Get the email and password inputs
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } elseif (!isset($userData['email']) || $email !== $userData['email']) {
        $errors[] = "No user found with this email.";
    } else {
        // Verify password
        if (password_verify($password, $userData['password'])) {
            // Set session variables for the logged-in user
            $_SESSION['user'] = [
                'email' => $userData['email'],
            ];
            // Redirect to welcome page
            header('Location: welcome.php');
            exit();
        } else {
            $errors[] = "Incorrect password.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <?php if (!empty($errors)): ?>
                  <div class="alert alert-danger">
                      <?php foreach ($errors as $error): ?>
                          <p><?php echo htmlspecialchars($error); ?></p>
                      <?php endforeach; ?>
                  </div>
              <?php endif; ?>

              <form method="POST" action="">
                <div class="form-outline form-white mb-4">
                  <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" required />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              </form>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <p class="mb-0">Don't have an account? <a href="sign-up.php" class="text-white-50 fw-bold">Sign Up</a></p>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
