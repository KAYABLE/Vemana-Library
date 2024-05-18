<?php
// Database configuration
$db_host = "localhost"; // Your database host (usually "localhost" for local development)
$db_user = "root"; // Your database username
$db_password = ""; // Your database password (leave blank if none)
$db_name = "vemana-library"; // Your database name

// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
