<?php
session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>YourNote - Login</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <header>
            <h1>YourNote</h1>
            <a href="register.php">Register</a>
        </header>

        <form action="services/proses_login.php" method="POST">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit">Login</button>
        </form>

        <?php if (isset($_SESSION["error"])): ?>
            <p style="color: red;"><?= $_SESSION["error"] ?></p>
            <?php unset($_SESSION["error"]); ?>
        <?php endif; ?>
    </body>
</html>