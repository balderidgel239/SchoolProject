
<?php

// Define database connection parameters
$host = 'localhost';
$dbname = 'mydatabase';
$user = 'username';
$password = 'password';

// Connect to database
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

// Retrieve data from database
$result = $conn->query('SELECT * FROM mytable');

// Display the data
while($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['email'] . "<br>";
}

// Close connection
$conn->close();

?>