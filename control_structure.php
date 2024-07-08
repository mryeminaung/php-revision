<?php

/* comments */

// single line comment

/* multiline commment */

# this is also a comment

$time = date("h");

if ($time > 6 and $time < 18) {
    echo "Day Time";
} else {
    echo "Night Time";
}

echo "<br/>";

// alternative syntax

if ($time > 6 and $time < 18) :
    echo "Day Time";
else :
    echo "Night Time";
endif;

echo "<br/>";

// switch statement, check input var with each test case

switch ($day) {
    case "Sat":
    case "Sun":
        echo "Weekend";
        break;
    case "Fri":
        echo "TGIF";
        break;
    default:
        echo "Weekday";
}
