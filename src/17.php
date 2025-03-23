<?php
// Initialize the session
session_start();

// Define constants for database connection details
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'school_project');

// Connect to the database
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if the database connection was successful
if (!$db) {
    die("Connection failed: " . htmlspecialchars(mysql_error()));
}

// Define variables and data arrays
$data = array(
    'name' => 'John Doe',
    'age' => 30,
    'email' => 'john.doe@example.com'
);

// Output the database result to the user
echo json_encode($data);
?>
