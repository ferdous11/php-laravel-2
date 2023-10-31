<?php
class Person {
    public $name;
    public $age;

    const MONTH=10;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "My name is {$this->name} and I am {$this->age} years old.\n";
    }
}

// Test the Person class
$person = new Person("John", 30);
$person->introduce();

class Student extends Person {
    public $mark;

    public function __construct($name, $age, $mark) {
        parent::__construct($name, $age);
        $this->mark = $mark;
    }

    public function calculate_grade_percentage() {
        // Assume that the mark is out of 100
        $gradePercentage = (floatval($this->mark) / 100) * 100;
        return "{$gradePercentage}%";
    }

    // Override the introduce method to display the mark
    public function introduce() {
        echo "My name is Alice, I am {$this->age} years old.\n";
    }
}

// Test the Student class
$student = new Student("Robert", 18, "85");
$student->introduce();
$gradePercentage = $student->calculate_grade_percentage();

class Zoom{
    private static int $count=0;

    function __construct(){
        self::$count++;
    }
    public function getCount(){
        return self::$count;
    }

    function __destruct(){
        self::$count--;
    }
}

$b1= new Zoom();
$b2= new Zoom();
$b3= new Zoom();
$b4= new Zoom();
unset($b3);
print $b4->getCount();