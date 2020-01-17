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
            2=> "Another Post",
            "Read This"];

            