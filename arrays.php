<?php

/* 
    Two types of array
    1. Numeric array -> work with index
    2. Associate array -> work with key, value pair like dictionary

    To print arrays, use print_r(), var_dump()
*/

/* array declaration  */

// numeric array, use array() or bracket notation []

$names = array('alice', 'bob', 'john', 'emily', 'bucky');

echo count($names);  // length of array

// insert new value, there will be no empty slots, eg. 1 2 3 7 <= index
$names[7] = "emma";

$names[] = "micky"; // micky index will be the length of arr + 1

$majors = ['CSE', 'ECE'];

// multi-dimensional array

$users = [
    ["name" => "Alice", "age" => 22],
    ["name" => "Bob", "age" => 23],
    ["name" => "Tom", "age" => 24],
];

print_r($users);

echo "<br/>";

// accessing each value
echo $users[0]['name'] . "<br/>";
echo $users[1]['name'] . "<br/>";
echo $users[2]['name'] . "<br/>";

var_dump($names);

print_r($majors);

echo "<br/>";

/* array destructuring and spread operator */

$user = ["Alice", 22];

list($fullName, $age) = $user;
[$name, $age] = $user; // php >= 7.1

echo $name; // Alice

$user = ["name" => "Alice", "age" => 22];

["name" => $name, "age" => $age] = $user;

echo $name; // Alice

$nums1 = [1, 2];

$nums2 = [...$nums1, 3]; // spread $nums1's values in $nums2
print_r($nums2);
// Array ( [0] => 1 [1] => 2 [2] => 3 )