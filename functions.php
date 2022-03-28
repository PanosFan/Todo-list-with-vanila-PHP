<?php
require_once './dbh.php';

function getTodo()
{
    global $db;
    $sql = 'SELECT * FROM todo';
    $statement = $db->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
}

function addTodo($todo)
{
    global $db;
    $sql = "INSERT INTO todo (description) VALUES (?)";
    $statement = $db->prepare($sql);
    $statement->execute([$todo]);
}

function deleteTodo($id)
{
    global $db;
    $sql = "DELETE FROM todo WHERE id=?";
    $statement = $db->prepare($sql);
    $statement->execute([$id]);
}