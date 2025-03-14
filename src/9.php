<?php
// Connect to database
$conn = new mysqli('hostname', 'username', 'password', 'dbname');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all projects from the database
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Print projects table
    echo "<table><tr><th>Project Name</th><th>Description</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>