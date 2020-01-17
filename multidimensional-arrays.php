<?php

$count  = 3;
$price = 9.99;
$values = [
    "message" => "hello world!",
    "count" => 150,
    "pi" => 3.14,
    "status" => false,
    "result" => null

];


var_dump($values);

$values2 = [$count,  $price];
var_dump($values2);

//Mulitdimensional arrays - useful for representing tables of data

$articles = [
    ["title" => "First post", "content" => "This is the first post"],
    ["title" => "Another post", "content" => "Another post to read here"],
    ["title" => "Read this!", "content" => "You must read this article"]
];

var_dump($articles[1]["title"]);

//Accessing the value individually

