<?php
session_start();

// Include database connection file
require_once "../php/db_connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"]; // New field for repeated password
    $university_seat_number = $_POST["university_seat_number"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $semester = $_POST["semester"];
    $department = $_POST["department"];
    $section = $_POST["section"];

    // Check if passwords match
    if ($password !== $confirm_password) {
        // Passwords do not match, redirect back to registration page with error
        header("Location: register.php?error=password_mismatch");
        exit();
    }

    // Check if username already exists
    $check_query = "SELECT * FROM users WHERE username='$username'";
    $check_result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($check_result) > 0) {
        // Username already exists, redirect back to registration page with error
        header("Location: register.php?error=username_taken");
        exit();
    }

    // Insert user data into database
    $insert_query = "INSERT INTO users (name, username, password, university_seat_number, phone_number, email, semester, department, section)
                     VALUES ('$name', '$username', '$password', '$university_seat_number', '$phone_number', '$email', '$semester', '$department', '$section')";
    if (mysqli_query($conn, $insert_query)) {
        // Registration successful, redirect to registration complete page
        header("Location: registration_complete.php");
        exit();
    } else {
        // Error inserting user data, redirect back to registration page with error
        header("Location: register.php?error=registration_failed");
        exit();
    }
} else {
    // Redirect back to registration page if accessed directly
    header("Location: register.php");
    exit();
}
?>
