<?php

/* 
    - Boolean (true, false)
    - integer (32-bits)
    - float (64-bits)
    - string
    - compound type 
        - array
        - object
    - special data type
        - NULL
        - resource
*/

class Car
{
    public function forward()
    {
    }

    public function backward()
    {
    }

    public function leftward()
    {
    }

    public function rightward()
    {
    }
}

$isEven = false;
$isMale = true;
$num = 123;
$floadNum = 123.456;
$strType = "This is a string data type";
$arr = [1, 2, 3, 4, 5];
$car = new Car;

var_dump($car);

// to declare constant value, use define() function or use const keyword
// don't need to use $ sign to declare const var if you use const keyword
// it cann't redeclare

define('MAX', 100);
define('MIN', 0);

const PI = 3.14;
