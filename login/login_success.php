<?php
session_start();
if (!isset($_SESSION['username'])) {
    // If the user is not logged in, redirect to the login page
    header("Location: login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful - Vemana Library</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/png" href="../images/B-icon.jpg">
    <meta http-equiv="refresh" content="2;url=../index.php"> <!-- Redirect after 2 seconds -->
</head>
<body class="bg-light">
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">VEMANA LIBRARY</div>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="../settings/settings.php" class="nav-link text-white">Settings</a></li>
                    <li class="nav-item"><a href="../login/login.php" class="nav-link text-white">Login</a></li>
                    <li class="nav-item"><a href="../register/register.php" class="nav-link text-white">Register</a></li>
                    <li class="nav-item"><a href="../browse/browse.php" class="nav-link text-white">Browse</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mt-4">
        <h2>Login Successful</h2>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>! You will be redirected to the home page shortly.</p>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Vemana Library</p>
    </footer>
</body>
</html>
