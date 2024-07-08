<?php

$name = "Ye Min Aung";
$age = 21;
$city = 'Mandalay';


$colors = ['red', 'orange', 'green', 'blue'];

// print function

/* 
    - echo -> used for single variable
    - print_r -> used for array
    - var_dump -> not only used for array but also  print with each datatype and length

*/

print_r($colors);

var_dump($colors);

/* 
    to insert variables to print , used double quote
    otherwise it won't work
    concat variables using dot[.] notation
*/

echo 'Name : $name, Age : $age, City : $city <br/>';

echo "Name : $name, Age : $age, City : $city <br/>";

echo "<br/>" . $name . ' ' . $age . ' ' . $city . "<br/>";

echo strtoupper($colors[1]);

// use isset() to check if a given var is null or not

echo isset($test);
