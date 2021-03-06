<?php

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
    if (!empty($todo)) {
        global $db;
        $sql = "INSERT INTO todo (description) VALUES (?)";
        $statement = $db->prepare($sql);
        $statement->execute([$todo]);
    }
}

function deleteTodo($id)
{
    global $db;
    $sql = "DELETE FROM todo WHERE id=?";
    $statement = $db->prepare($sql);
    $statement->execute([$id]);
}

function updateTodo($value, $id)
{
    if (!empty($value)) {
        global $db;
        $sql = "UPDATE todo SET description = ? WHERE id=?";
        $statement = $db->prepare($sql);
        $statement->execute([$value, $id]);
    }
}