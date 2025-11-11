<?php
session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>YourNote - Register</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <header>
            <h1>YourNote</h1>
            <a href="login.php">Login</a>
        </header>

        <form action="services/proses_register.php" method="POST">
            <h2>Register</h2>
            <input
                type="text"
                name="username"
                placeholder="Username"
                required
            />
            <input
                type="password"
                name="password"
                placeholder="Password"
                required
            />
            <button type="submit">Register</button>
        </form>
        <?php if (isset($_SESSION["error"])): ?>
            <p style="color: red;"><?= $_SESSION["error"] ?></p>
            <?php unset($_SESSION["error"]); ?>
        <?php endif; ?>
        <?php if (isset($_SESSION["success"])): ?>
            <p style="color: green;"><?= $_SESSION["success"] ?></p>
            <?php unset($_SESSION["success"]); ?>
        <?php endif; ?>
    </body>
</html>
