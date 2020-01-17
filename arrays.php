<?php

//Arrays

// creating an array
$articles = ["First post", "Another Post", "Read this!"];

//creating an array function


$articles2 = array("First post", "Another post", "Read this");


//These two methods are both the same

var_dump($articles[0]);
//  Each value in an array is traditionally reffered to as an array element.  Each element of an arrays has a unique value
// indexed from 0

// accessing an array index

$articles[0];
$articles[1];
$articles[2];

//Assigning an index to an array, specifying an elements index
//Yhe idex can be any whole number that you like, they do not have to be sequential.

$articles3 = [ 1=> "First Post",
            3=> "Another Post",
            "Read This"];

//Arrays with string indexes are referred to as associative arrays

//You can only use integers or strings as array indexes

//Associative array example
$articles4 = [
    "first" => "First post", 
    "second" => "Another post", 
    "third" => "Read this!"
];
var_dump($articles4);

//Indvidual elements in an associative array are accessed in the same way as a normal array
var_dump($articles4["second"]);

