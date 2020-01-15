<?php
$logged_in = true;
$is_admin = false;
$data = null;

$user_id = null;
$my_id; // null

//  These are not the same
$boolean = true;
$string = "true";

$name = null;
$string = "null";

//  This is how you pass in multiple values to var_dump()
var_dump($logged_in, $data);