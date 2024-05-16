<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vemana Library</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to your CSS file -->
    <link rel="icon" type="image/png" href="images/B-icon.jpg">
</head>
<body>
    <header>
        <div class="logo">VEMANA LIBRARY</div>
        <button class="menu-toggle" onclick="openNav()">Menu</button>
    </header>
    <main>
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </main>
    <footer>
        <p>&copy; 2024 Vemana Library</p>
    </footer>
</body>
</html>
