<?php
// SchoolProject.php

class SchoolProject
{
    private $projects = array();

    public function __construct()
    {
        // Initialize the projects array with some sample data
        $this->projects[] = array(
            'name' => 'Math Project',
            'description' => 'A comprehensive overview of math concepts.',
            'link' => '/math-project'
        );

        $this->projects[] = array(
            'name' => 'Science Project',
            'description' => 'An in-depth look at the natural world.',
            'link' => '/science-project'
        );

        $this->projects[] = array(
            'name' => 'English Project',
            'description' => 'A comprehensive overview of literature and grammar.',
            'link' => '/english-project'
        );
    }

    public function getProjects()
    {
        return $this->projects;
    }
}

// Sample usage:
$schoolProject = new SchoolProject();
echo json_encode($schoolProject->getProjects());
?>