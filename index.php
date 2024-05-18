<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Vemana Library</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/B-icon.jpg">
</head>
<body class="bg-light">
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">VEMANA LIBRARY</div>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="settings/settings.php" class="nav-link text-white">Settings</a></li>
                    <li class="nav-item"><a href="login/login.php" class="nav-link text-white">Login</a></li>
                    <li class="nav-item"><a href="register/register.php" class="nav-link text-white">Register</a></li>
                    <li class="nav-item"><a href="browse/browse.php" class="nav-link text-white">Browse</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mt-4">
        <?php if (isset($_SESSION['username'])): ?>
            <h2>Welcome to Vemana Library</h2>
            <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
            <!-- Add your home page content here -->
        <?php else: ?>
            <h2>Welcome to Vemana Library</h2>
            <p>Please <a href="login/login.php">log in</a> to view the content.</p>
        <?php endif; ?>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Vemana Library</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
