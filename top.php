<?php
require('database.php');

getArticles($db);

function getArticles($conn) {
    $sql = 'SELECT title, author_id, category FROM article';
    foreach ($conn->query($sql) as $row) {
        print $row['title'] . "\t";
        print $row['author_id'] . "\t";
        print $row['category'] . "\n";
    }
}

