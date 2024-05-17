<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vemana Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css"> <!-- Link to your custom CSS file -->
    <link rel="icon" type="image/png" href="../images/B-icon.jpg">
</head>
<body class="bg-light">
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">VEMANA LIBRARY</div>
            <nav class="d-none d-md-block">
                <ul class="nav">
                    <li class="nav-item"><a href="../settings/settings.html" class="nav-link text-white">Settings</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link text-white">Login</a></li>
                    <li class="nav-item"><a href="../register/register.php" class="nav-link text-white">Register</a></li>
                    <li class="nav-item"><a href="../browse/browse.html" class="nav-link text-white">Browse</a></li>
                </ul>
            </nav>
            <button class="btn btn-outline-light d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </header>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item"><a href="../settings/settings.html" class="nav-link">Settings</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="../register/register.php" class="nav-link">Register</a></li>
                <li class="nav-item"><a href="../browse/browse.html" class="nav-link">Browse</a></li>
            </ul>
        </div>
    </div>
    <main class="container mt-4">
        <h2>Login</h2>
        <form action="login_process.php" method="post" class="mb-3">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <p>Don't have an account? <a href="../register/register.php">Register here</a>.</p>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Vemana Library</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
