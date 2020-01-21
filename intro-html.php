<?php

$articles = ["First post", "Another post", "Read this!"];

if (empty($articles)) {
    echo "No articles found.";
} else {
    foreach ($articles as $article)  {
        echo $article, ", ";
    }
}