<?php

$names = ['alice', 'bob', 'john', 'emily', 'bucky'];

/* 
    do-while
    while
    for loop
    foreach loop
*/

foreach ($names as $index => $name) {
    echo $name . "<br/>";
}

echo "<hr/>";

$users = [
    ["name" => "Alice", "age" => 22],
    ["name" => "Bob", "age" => 23],
    ["name" => "Tom", "age" => 24],
];

foreach ($users as $user) {
    echo $user['name'] . "<br/>";
}
