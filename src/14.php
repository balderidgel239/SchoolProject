
<?php

// Get all projects from database
$projects = $db->getAllProjects();

// Iterate over each project and display its information
foreach($projects as $project) {
    echo "Project Name: {$project['name']} <br>";
    echo "Project Description: {$project['description']} <br>";
    echo "Project Status: {$project['status']} <br><hr>";
}

?>