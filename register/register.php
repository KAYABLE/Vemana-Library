<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Vemana Library</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to your CSS file -->
    <link rel="icon" type="image/png" href="images/B-icon.jpg">
</head>
<body>
    <header>
        <div class="logo">VEMANA LIBRARY</div>
        <button class="menu-toggle" onclick="openNav()">Menu</button>
    </header>
    <main>
        <h2>Register</h2>
        <form action="register_process.php" method="post">
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
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </main>
    <footer>
        <p>&copy; 2024 Vemana Library</p>
    </footer>
</body>
</html>
