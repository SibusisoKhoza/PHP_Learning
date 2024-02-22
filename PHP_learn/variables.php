<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variables</h1>
    <!-- This a html comment. -->
    <p>This is a <?php echo "php added" ?> paragraph!</p>
    <?php echo "This is also a paragraph!"; ?>
    

    <?php
    //some variables
    $name = "Sibusiso";
    $fullName = "Sibusiso Khoza";
    $occupation = "Software Engineer";

    //array variables
    $names = ["Sibusiso", "Sbuda", "Skay"];
    $names1 = array("Sibusiso", "Sbuda", "Skay");
    //array 

    //operators
    $str = "This is some <b>bold</b> text.";
    echo htmlspecialchars($str);
    ?>

    <p>My name is <?php echo $fullName . " and I am " . $occupation ?></p>
</body>
</html>