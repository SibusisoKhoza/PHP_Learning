<?php
echo '<pre>';
echo var_dump($_POST);
echo '/<pre>';

$todo_name = $_POST['todo_name'] ?? false;

if($todo_name){
    echo "set";
} else {
    echo "No new to do set";
}
