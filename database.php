<?php

$host = "localhost";
$dbname = "test";
$user = "user";
$pass = "user";


try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
}
catch(PDOException $e) {
    echo $e->getMessage();
}