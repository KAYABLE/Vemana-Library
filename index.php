<?php
session_start();
require 'profile/database.php';

$userLoggedIn = isset($_SESSION['user_id']);
$userProfilePic = null;

if ($userLoggedIn) {
    $userId = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT profile_pic FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($profilePicPath);
    $stmt->fetch();
    $userProfilePic = $profilePicPath ? $profilePicPath : 'images/default-pic.jpg';
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vemana Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Logo</a>
        <span class="navbar-text mx-auto">Vemana Library</span>
        <div class="ml-auto">
            <?php if ($userLoggedIn): ?>
                <img src="<?php echo $userProfilePic; ?>" alt="Profile Picture" class="profile-pic rounded-circle mr-2">
                <a href="profile/dashboard.php" class="btn btn-outline-secondary"><i class="fas fa-user-circle"></i> Profile</a>
                <a href="auth/logout/logout.php" class="btn btn-outline-secondary"><i class="fas fa-sign-out-alt"></i> Logout</a>
            <?php else: ?>
                <a href="auth/login/login.php" class="btn btn-outline-secondary"><i class="fas fa-sign-in-alt"></i> Sign In</a>
                <a href="auth/register/register.php" class="btn btn-outline-secondary"><i class="fas fa-user-plus"></i> Sign Up</a>
            <?php endif; ?>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-nav mx-auto">
            <a class="nav-item nav-link" href="browse/browse.php"><i class="fas fa-book"></i> Browse</a>
            <a class="nav-item nav-link" href="search.php"><i class="fas fa-search"></i> Search</a>
            <button class="btn btn-outline-secondary" id="dark-mode-toggle"><i class="fas fa-adjust"></i> Change Dark Mode</button>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
