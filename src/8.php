<?php

// Connect to the database
$db = new mysqli('localhost', 'username', 'password', 'databasename');

// Check if there are any errors in the connection
if ($db->connect_error) {
    die("There was an error while connecting to the database: " . $db->connect_error);
}

// Get the list of projects from the database
$projects = $db->query('SELECT * FROM projects');

// Create an array to store the project details
$projectDetails = [];

// Loop through each project and extract its details
while ($row = $projects->fetch_assoc()) {
    // Add the project ID to the array of project IDs
    $projectIds[] = $row['id'];
    
    // Add the project name, description, and deadline to the array of project details
    $projectDetails[] = [
        'name' => $row['name'],
        'description' => $row['description'],
        'deadline' => $row['deadline']
    ];
}

// Close the database connection
$db->close();

// Return the array of project details and IDs
return [$projectIds, $projectDetails];

?>