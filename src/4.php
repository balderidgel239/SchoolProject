 <?php

// Connect to database
$db = new PDO("mysql:host=localhost;dbname=school", "username", "password");

// Query database for project information
$stmt = $db->prepare("SELECT * FROM projects WHERE school_id = :school_id ORDER BY name ASC");
$stmt->bindValue(':school_id', $_SESSION['school_id']);
$stmt->execute();

// Loop through results and display project information
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "Project Name: " . $row['name'] . "<br>";
    echo "Project Description: " . $row['description'] . "<br>";
}

?>