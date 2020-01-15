<?php

$count = 10;
$size = 2;

var_dump($count + 5);
var_dump($count * size);


// $price = 2.95;
// $quantity = 5;

var_dump($price * $quantity);

//string concatenation
$message = "Hello";
$name = "Dave";

echo $message . " " . $name;


// type conversion or type juggling
// the "150" in the variable price will be converted to an integer
$price = "150";
$quantity = 3;

$price = $price * $quantity;

var_dump($price);

//logical operator example

$is_editor = true;
$is_adming = false;

var_dump(! $is_editor);

var_dump($is_editor and $is_admin);