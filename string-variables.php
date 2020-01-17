<?php

$message = 'Hello';
$name = "Dave";

$start = "3 o'clock";
//using the escape character
$end = '4 o\'clock';

echo $start, $end;

//  creating a new line
$days = "Monday\nTuesday\nWednesday";

//string concatentaion
echo "Hello " . $name;

// variable interpolation
echo "Hello {$name}";