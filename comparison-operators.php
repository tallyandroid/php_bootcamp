<?php

//Comparison operators
//The result of comparing two values always results in true or false

var_dump(3 == 4);

$age = 21;

if (age == 21) {
    echo "Condition is true";
} else {
    echo "Condtion is false";
}


$month = 1;

while ($month <= 12) {
    echo $month . ", ";
    $month = $month + 1;
}