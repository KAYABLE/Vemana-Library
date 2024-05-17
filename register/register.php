<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Vemana Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/png" href="../images/B-icon.jpg">
    <style>
        /* Custom styles for the register form */
        .register-form {
            background-color: #f8f9fa; /* Light grey background */
            padding: 20px;
            border-radius: 10px;
        }

        .form-control {
            background-color: #e9ecef; /* Lighter grey background for input fields */
            color: #495057; /* Dark text color */
        }

        .form-label {
            color: #6c757d; /* Dark grey label color */
        }

        .btn-primary {
            background-color: #007bff; /* Primary button color */
            border-color: #007bff; /* Primary button border color */
        }

        .btn-primary:hover {
            background-color: #0069d9; /* Primary button hover color */
            border-color: #0062cc; /* Primary button hover border color */
        }
    </style>
</head>
<body class="bg-light">
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">VEMANA LIBRARY</div>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="../settings/settings.html" class="nav-link text-white">Settings</a></li>
                    <li class="nav-item"><a href="../login/login.php" class="nav-link text-white">Login</a></li>
                    <li class="nav-item"><a href="../register/register.php" class="nav-link text-white">Register</a></li>
                    <li class="nav-item"><a href="../browse/browse.html" class="nav-link text-white">Browse</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mt-4">
        <div class="register-form mx-auto"> <!-- Center align the register form -->
            <h2 class="mb-4">Register</h2>
        <form action="register_process.php" method="post">
            <div class="mb-3">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" required><br>
                <label for="university_seat_number">University Seat Number:</label><br>
                <input type="text" id="university_seat_number" name="university_seat_number" required><br>
                <label for="phone_number">Phone Number:</label><br>
                <input type="text" id="phone_number" name="phone_number" required><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="semester">Semester:</label><br>
                <input type="text" id="semester" name="semester" required><br>
                <label for="department">Department:</label><br>
                <input type="text" id="department" name="department" required><br>
                <label for="section">Section:</label><br>
                <input type="text" id="section" name="section" required><br>    
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>
                <label for="confirm_password">Confirm Password:</label><br>
                <input type="password" id="confirm_password" name="confirm_password" required><br>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Vemana Library</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>