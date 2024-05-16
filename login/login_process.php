<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    require_once "../php/db_connection.php";

    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check if the user exists in the database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // Check if the query returned any rows
    if (mysqli_num_rows($result) == 1) {

        // User exists, set session variables and redirect to homepage
        $_SESSION["username"] = $username;
        header("Location: /vemana-library");
        exit();

    } else {
        // User doesn't exist or invalid credentials, redirect back to login page
        header("Location: login.php?error=invalid_credentials");
        exit();
    }
} else {
    // Redirect back to login page if accessed directly
    header("Location: login.php");
    exit();
}
?>
