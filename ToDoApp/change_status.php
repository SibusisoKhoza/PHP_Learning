<?php

$json = file_get_contents('todo.json');
$jsonArray = json_decode($json, true);

$todo_name = $_POST['todo_name'];

$jsonArray[$todo_name]['completed'] = !($jsonArray[$todo_name]['completed']);

//$jsonArray[$todo_name]['completed'] = $jsonArray[$todo_name]['completed'] === 'true' ? 'false' : 'true';

file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

header('Location: index.php');