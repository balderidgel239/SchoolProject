<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example code to query the database

    $sql = "SELECT * FROM students WHERE id = 1";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Yes, record exists.";
    } else {
        echo "No records found.";
    }

    // Close the connection
    $conn->close();
?>
