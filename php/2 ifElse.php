<?php

$age = 16;
$isStudent = true;


if ($age >= 18) {
    echo "You are eligible for discounts! \n";
    
    if ($isStudent) {
        echo "You are also eligible for a student discount!";
    } else {
        echo "But you are not a student.";
    }
} else {
    echo "Sorry, you are not eligible for discounts because you are under 18.";
}
