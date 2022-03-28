<?php

$dsn = 'mysql:host=localhost;dbname=crud-todo';
$name = 'root';

try {
    $db = new PDO($dsn, $name);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}