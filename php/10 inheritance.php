<?php

// Define a class named "Person"
class Person
{
    // Properties (attributes)
    public $name;
    public $age;
    public $gender;

    // Constructor method
    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    // Method to display information about the person
    public function displayInfo()
    {
        echo "Person's information \n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Gender: " . $this->gender . "\n";
    }
}

class Student extends Person
{
    public function displayInfo()
    {
        echo "\nStudent's information \n";

        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Gender: " . $this->gender . "\n";
    }
}

// Create an object
$person = new Person("rakib", 20, "Male");
$student = new Student("tushar", 16, "Male");

// Call the displayInfo method to display information
$person->displayInfo();
$student->displayInfo();