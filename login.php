<?php
// Include database connection
include('includes/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <h1><a href="index.php">Website</a></h1>
            </div>
        </div>
    </header>

    <!-- Login Form -->
    <main>
        <div class="container">
            <h2>Login</h2>
            <form action="login_process.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Website. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
