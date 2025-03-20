<?php
// Initialize session
session_start();

// Check if user is already logged in
if (!isset($_SESSION['username']) || !$_SESSION['username'] === "admin") {
    // Redirect to login page
    header("Location: login.php");
    exit();
}

// Get username from session
$username = $_SESSION['username'];

// Check if user is not an admin
if ($username !== "admin") {
    // Redirect to home page
    header("Location: index.php");
    exit();
}

// Code for your project goes here

?>
