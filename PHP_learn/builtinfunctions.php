<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Built in functions</title>
</head>
<body>
    <?php
    $firstname = "Sibusiso";

    echo strpos($firstname, "so");
    echo str_replace("so", "kh", $firstname);

    //other functions include implod strupper, lower, etc...
    //math functions etc...
    echo rand(1,90);
    echo date("Date");
    ?>
    
</body>
</html>