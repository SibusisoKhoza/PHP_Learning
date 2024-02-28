
<?php
$todos = [];
if(file_exists('todo.json')){
    $json = file_get_contents('todo.json');
    $todos = json_decode($json, true);
}else{
    echo "No to do list";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="newtodo.php" method="post">
        <input type="text" name="todo_name" placeholder="Enter a new task">
        <button type="submit">Add New Task</button>
    </form>

    <?php foreach ($todos as $todoName => $todo): ?>
        <input type='checkbox' <?php echo $todo['completed'] === 'true' ? 'checked' : '' ?> >
        <?php echo $todoName;?>
        <button>Delete</button><br>
       

    <?php endforeach; ?>
</body>
</html>