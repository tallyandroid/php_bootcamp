<?php

//elseif allows us to extend if/else

$hour = 11;

if ($hour < 12) {
    echo "Good Morning";
} elseif ($hour < 18) {
    echo "Good Afternoon";
} elseif ($hour < 22) {
    echo "Good evening";
} else {
    echo "Good night";
}