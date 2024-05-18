<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    require_once "../php/db_connection.php";

// Get form data
$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
$university_seat_number = $_POST["university_seat_number"];
$phone_number = $_POST["phone_number"];
$email = $_POST["email"];
$semester = $_POST["semester"];
$department = $_POST["department"];
$section = $_POST["section"];

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
    // Registration successful, redirect to login page
    header("Location: login.php?registration=success");
    exit();
} else {
    // Error inserting user data, redirect back to registration page with error
    header("Location: register.php?error=registration_failed");
    exit();}

} else {
    // Redirect back to registration page if accessed directly
    header("Location: register.php");
    exit();
}


?>
