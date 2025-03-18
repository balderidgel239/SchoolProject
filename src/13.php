<?php 
$studentArray = array(
    "Student1" => array("Name" => "John", "Age" => 23),
    "Student2" => array("Name" => "Jane", "Age" => 25),
    "Student3" => array("Name" => "Bob", "Age" => 30)
);
echo json_encode($studentArray);
?>