<?php


$marks = 65;


switch ($marks) {
    case ($marks >= 90 && $marks <= 100):
        $grade = 'A+';
        break;
    case ($marks >= 80 && $marks < 90):
        $grade = 'A';
        break;
    case ($marks >= 70 && $marks < 80):
        $grade = 'B';
        break;
    case ($marks >= 60 && $marks < 70):
        $grade = 'C';
        break;
    case ($marks >= 50 && $marks < 60):
        $grade = 'D';
        break;
    case ($marks >= 0 && $marks < 50):
        $grade = 'F';
        break;
    default:
        $grade = 'Invalid Marks';
}


echo "Marks Obtained: $marks\n";
echo "Grade: $grade";
