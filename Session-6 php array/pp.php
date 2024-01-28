<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ARRAY</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; 
            margin: 0;
            font-size:20px;
        }

        pre {
            border: 2px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
//indexed array
$fruits = ['Apple', 'Banana', 'Orange'];



$newFruits=array_slice($fruits,2,2);
Print_r($newFruits); 


//associative array
$fruits = [
    'apple' => 'Red',
    'banana' => 'Yellow',
    'orange' => 'Orange',
    'grape' => 'Purple',
];

// multidimensional array

$foods=[
    'fruits'=>['mango','apple','orange','banana'],
    'vegetables'=>['potato','onion','cabbage'],
    'protein'=>['chicken','meat','fish'],
];
 












  
 






?>

</body>
</html>
