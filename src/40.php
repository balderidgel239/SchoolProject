<?php
class Student {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$student1 = new Student("Zhang San", 20);
echo "Name: " . $student1->getName() . ", Age: " . $student1->getAge();
?>
