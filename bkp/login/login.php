<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vemana Library</title>
    <link rel="stylesheet" href="../css/styles.css"> <!-- Link to your custom CSS file -->
    <link rel="icon" type="image/png" href="../images/B-icon.jpg">
</head>
<body class="bg-light">
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">VEMANA LIBRARY</div>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="../settings/settings.php" class="nav-link text-white">Settings</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link text-white">Login</a></li>
                    <li class="nav-item"><a href="../register/register.php" class="nav-link text-white">Register</a></li>
                    <li class="nav-item"><a href="../browse/browse.php" class="nav-link text-white">Browse</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mt-4">
        <h2>Login</h2>
        <form id="loginForm" action="login_process.php" method="post" class="mb-3">
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

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Get the form data
            var form = event.target;
            var formData = new FormData(form);

            // Send the form data using Fetch API
            fetch(form.action, {
                method: form.method,
                body: formData
            })
            .then(response => {
                // Check if login was successful (you might need to adjust this condition based on your backend logic)
                if (response.redirected) {
                    // Redirect to the desired location after successful login
                    window.location.href = response.url; // Redirect to the URL provided by the backend
                } else {
                    // Handle login failure or other responses here
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
