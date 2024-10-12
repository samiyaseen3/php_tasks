<?php
session_start();

// Initialize an empty array to hold errors
$errors = [];
$userInfo = [];

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs and sanitize them
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $mobile = filter_var(trim($_POST['mobile']), FILTER_SANITIZE_STRING);
    $fullName = explode(' ', trim($_POST['fullName']));
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);
    $day = intval($_POST['day']);
    $month = intval($_POST['month']);
    $year = intval($_POST['year']);
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate mobile number
    if (!preg_match('/^\d{10}$/', $mobile)) {
        $errors[] = "Mobile number must be 10 digits.";
    }

    // Validate full name
    if (count($fullName) < 4 || array_filter($fullName, function($name) {
        return !preg_match('/^[a-zA-Z]+$/', $name);
    })) {
        $errors[] = "Please enter a valid full name (4 sections).";
    }

    // Validate password strength
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
        $errors[] = "Password must be at least 8 characters long and include uppercase, lowercase, numbers, special characters, and no spaces.";
    }

    // Check if passwords match
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    // Check date of birth
    $dob = new DateTime("$year-$month-$day");
    $age = $dob->diff(new DateTime())->y;

    if ($age < 16) {
        $errors[] = "You must be at least 16 years old to register.";
    }

    // If no errors, save user info
    if (empty($errors)) {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simulate storing the user data (normally, you'd store this in a database)
        $_SESSION['registered_user'] = [
            'email' => $email,
            'password' => $hashedPassword, // Store the hashed password
        ];

        // Redirect to login page
        header('Location: log-in.php');
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
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
              <h2 class="fw-bold mb-2 text-uppercase">Sign-Up</h2>
              <p class="text-white-50 mb-5">Please fill in your details!</p>

              <?php if (!empty($errors)): ?>
                  <div class="alert alert-danger">
                      <?php foreach ($errors as $error): ?>
                          <p><?php echo htmlspecialchars($error); ?></p>
                      <?php endforeach; ?>
                  </div>
              <?php endif; ?>

              <form method="POST" action="">
                <div class="form-outline form-white mb-4">
                  <input type="text" id="typeNameX" name="fullName" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeNameX">Full Name (fname, middle, last, family)</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="tel" id="typeMobileX" name="mobile" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeMobileX">Mobile (10 digits)</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" required />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typeConfirmPasswordX" name="confirmPassword" class="form-control form-control-lg" required />
                  <label class="form-label" for="typeConfirmPasswordX">Confirm Password</label>
                </div>

                <div class="form-group mb-4">
                  <label for="dob" class="form-label">Date of Birth</label>
                  <div class="d-flex">
                    <input type="number" id="day" name="day" class="form-control" placeholder="DD" min="1" max="31" required style="width: 30%;" />
                    <input type="number" id="month" name="month" class="form-control mx-2" placeholder="MM" min="1" max="12" required style="width: 30%;" />
                    <input type="number" id="year" name="year" class="form-control" placeholder="YYYY" required style="width: 40%;" />
                  </div>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>
              </form>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <p class="mb-0">Already have an account? <a href="log-in.php" class="text-white-50 fw-bold">Log In</a></p>
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
