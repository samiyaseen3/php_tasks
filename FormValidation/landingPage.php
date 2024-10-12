<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        a {
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
      <div>
        <h1 class="text-center mt-5">Hello There!</h1>
        <p class="text-center mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, cum. Corrupti iure recusandae adipisci ratione officiis quos dicta illum consectetur.</p>
        <img src="landingPage image.png" class="rounded mx-auto d-block" alt="landingPageImage" >
      </div>
    </header>
    <main>
      <div class="button-container">
        <a class="btn btn-primary" href="log-in.php">Log in</a>
        <a class="btn btn-danger" href="sign-up.php">Sign Up</a>
      </div>
    </main>
</body>
</html>
