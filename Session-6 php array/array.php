<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Array</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; 
            margin: 0;
        }

        pre {
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php

   


//   //multidimensional array

//   $multidimensional=[
//     'fruits'=>['mango','banana','apple','orange'],
//     'vegetable'=>['potato','tomato','onion','garlic'],
//     'protein'=>['chicken','meat','fish','beef'],
//   ];
 //indexed array
//  $indexed=[
//     'mango','banana','apple','orange','pineapple'
// ];
 //associative array
//   $associative=[
//     'fruits'=>'mango',
//     'vegetable'=>'tomato',
//     'protein'=>'chicken',
//   ];
      

$fruits = array("banana", "apple", "orange", "grape");


sort($fruits);


print_r($fruits);

 ?>
</body>
</html>