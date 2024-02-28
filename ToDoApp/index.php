
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
    <br>
    <?php foreach ($todos as $todoName => $todo): ?>
        <div style="margin-bottom: 10px;">

            <form style="display: inline;" action='change_status.php' method='post'>
                <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                <input type='checkbox' <?php echo    $todo['completed'] === 'true' ? 'checked' : '' ?> >
            </form>

            <?php echo $todoName;?>

            <form style="display: inline;" action='delete.php' method='post'>
                <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                <button>Delete</button>
            </form>

        </div>
    <?php endforeach; ?>

        <script>
            const checkboxes = document.querySelectorAll("input[type=checkbox]");
            checkboxes.forEach(ch => {
                ch.onclick = function (){ //an arrow function would not work with "this" as it points to global object;
                    this.parentNode.submit();
                };
            });
        </script>

</body>
</html>