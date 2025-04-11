<?php
class SchoolProject {
    private $projectName;
    private $code;

    public function __construct($projectName) {
        $this->projectName = $projectName;
        $this->code = "Your PHP code here";
    }

    public function getProjectName() {
        return $this->projectName;
    }

    public function getCode() {
        return $this->code;
    }
}

// Example usage
$project = new SchoolProject("My Project");
echo $project->getProjectName(); // Output: My Project

// Assuming you have a method to generate code in PHP, let's say it returns "Your PHP code here"
$yourCode = "Your PHP code here";
