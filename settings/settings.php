<?php include('../auth_check.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Vemana Library</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/png" href="../images/B-icon.jpg">
</head>
<body class="bg-light">
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">VEMANA LIBRARY</div>
            <nav class="d-none d-md-block">
                <ul class="nav">
                    <li class="nav-item"><a href="settings.php" class="nav-link text-white">Settings</a></li>
                    <li class="nav-item"><a href="../login.php" class="nav-link text-white">Login</a></li>
                    <li class="nav-item"><a href="../register/register.php" class="nav-link text-white">Register</a></li>
                    <li class="nav-item"><a href="../browse/browse.php" class="nav-link text-white">Browse</a></li>
                </ul>
            </nav>
            <button class="menu-toggle" onclick="openNav()">Menu</button>
        </div>
    </header>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" onclick="closeNav()"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav">
                <li class="nav-item"><a href="settings.php" class="nav-link">Settings</a></li>
                <li class="nav-item"><a href="../login.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="../register/register.php" class="nav-link">Register</a></li>
                <li class="nav-item"><a href="../browse/browse.php" class="nav-link">Browse</a></li>
            </ul>
        </div>
    </div>

    <main class="container mt-4">
        <h2>Settings</h2>
        <!-- Your settings content here -->
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Vemana Library</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        function openNav() {
            document.getElementById('offcanvasNavbar').classList.add('show');
        }

        function closeNav() {
            document.getElementById('offcanvasNavbar').classList.remove('show');
        }
    </script>
</body>
</html>
