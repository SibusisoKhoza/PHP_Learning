<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    $fruits = ["Apple", "Banana", "Cherry"];
    unset($fruits[0]); //removes the value and index from the array, now $fruits[0] will not be accessible
    echo var_dump($fruits);

    //Associative arrays
    $tasks = [
        "laundry" => "Sbuda",
        "dishes" => "Sibusiso",
        "cleaning" => "Skay",
    ];

    echo $tasks["laundry"];

    echo var_dump($tasks); // or can use print_r()

    ?>
</body>
</html>