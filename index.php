<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Vemana Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/B-icon.jpg">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Vemana Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="settings/settings.php">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="browse/browse.php">Browse</a>
                    </li>
                    <?php if (isset($_SESSION['user'])): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="images/profile.jpg" alt="Profile" style="width: 30px; height: 30px; border-radius: 50%;"> <!-- Add your profile image here -->
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="dashboard/dashboard.php">Dashboard</a></li>
                                <li><a class="dropdown-item" href="dashboard/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard/login.php">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard/register.php">Sign Up</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h2>Welcome to Vemana Library</h2>
        <?php if (isset($_SESSION['user'])): ?>
            <p>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>
            <p><a href="dashboard/dashboard.php" class="btn btn-primary">Go to Dashboard</a></p>
        <?php else: ?>
            <p>Please <a href="dashboard/login.php" class="btn btn-primary">log in</a> or <a href="dashboard/register.php" class="btn btn-secondary">register</a> to view the content.</p>
        <?php endif; ?>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
