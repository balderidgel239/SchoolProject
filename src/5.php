
<?php

// Function to get all the projects from the database
function getAllProjects() {
  // Connect to the database and query for all projects
  $conn = new mysqli("localhost", "username", "password", "database");
  $query = "SELECT * FROM projects";
  $result = $conn->query($query);
  
  // Return an array of project objects
  $projects = [];
  while ($row = $result->fetch_assoc()) {
    $project = new Project();
    $project->setId($row["id"]);
    $project->setName($row["name"]);
    $project->setDescription($row["description"]);
    $projects[] = $project;
  }
  
  return $projects;
}

// Function to get a specific project from the database
function getProjectById($id) {
  // Connect to the database and query for the specified project
  $conn = new mysqli("localhost", "username", "password", "database");
  $query = "SELECT * FROM projects WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  
  // Return a project object if found, or null otherwise
  $result = $stmt->get_result()->fetch_assoc();
  if ($result) {
    $project = new Project();
    $project->setId($result["id"]);
    $project->setName($result["name"]);
    $project->setDescription($result["description"]);
    return $project;
  } else {
    return null;
  }
}

// Function to add a new project to the database
function addProject($name, $description) {
  // Connect to the database and insert the new project
  $conn = new mysqli("localhost", "username", "password", "database");
  $query = "INSERT INTO projects (name, description) VALUES (?, ?)";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ss", $name, $description);
  $stmt->execute();
  
  // Return the ID of the new project
  return $conn->insert_id;
}

// Function to update an existing project in the database
function updateProject($id, $name, $description) {
  // Connect to the database and update the specified project
  $conn = new mysqli("localhost", "username", "password", "database");
  $query = "UPDATE projects SET name = ?, description = ? WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ssi", $name, $description, $id);
  $stmt->execute();
}

// Function to delete a project from the database
function deleteProject($id) {
  // Connect to the database and delete the specified project
  $conn = new mysqli("localhost", "username", "password", "database");
  $query = "DELETE FROM projects WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("i", $id);
  $stmt->execute();
}

// Class to represent a project
class Project {
  private $id;
  private $name;
  private $description;
  
  // Getters and setters for the project properties
  public function getId() { return $this->id; }
  public function getName() { return $this->name; }
  public function getDescription() { return $this->description; }
  
  public function setId($id) { $this->id = $id; }
  public function setName($name) { $this->name = $name; }
  public function setDescription($description) { $this->description = $description; }
}

?>