<?php

$articles = [
    "First post", 
    "Another post", 
    "Read this!"
];

// echo($articles);

//Loops allow you to run some code on each element of an array, regardless of how many elements it has

foreach($articles as $index => $article) {
    echo $index . ' - ' . $article, ", ";
}

// foreach loops with Indexes
//$index was used as the variable to identify the index, you can call it whatever you like. 

$articles2 = [
    'a' => "First Post",
    'b' => "Another post",
    'c' => "Read this!"
];

foreach($articles2 as $index => $article) {
    echo $index . ' -  ' . $article, ", ";
}