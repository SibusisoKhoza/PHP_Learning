<!-- 
This file is adding todo items to the JSON file and decode them.
-->

<?php
echo '<pre>';
echo var_dump($_POST);
echo '/<pre>';

$todoName = $_POST['todo_name'] ?? false;
$todoName = trim($todoName);

if($todoName){
    if (file_exists('todo.json')){
    //Get the JSON file contents
    $json = file_get_contents('todo.json');

    //echo $json;

    //Decode the JSON file into an associative PHP array
    $jsonArray = json_decode($json, true);
    } else {
        $jsonArray = [];
    }
    //Add a new todo in the array
    $jsonArray[$todoName] = ['completed' => 'false'];

    
    //var_dump($json_decoded);
    //echo $json_decoded['Todo 1']["completed"];

    //save the JSONarray back in to the JSON file
    file_put_contents("todo.json", json_encode($jsonArray, JSON_PRETTY_PRINT));

} else {
    echo "No new to do set";
}

header('Location: index.php');
