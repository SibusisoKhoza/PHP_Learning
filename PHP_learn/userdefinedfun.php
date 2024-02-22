<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions</title>
</head>
<body>
    <?php
    function greet(){
        echo "Hello World! <br>";
    }

    function param($val1 = "Default name", $val2){
        echo "My name is " . $val1 . " and my surname is " . $val2;
    }

    greet();
    param("Sibusiso", "Khoza");
    param("sd", "Khoza");
   
    ?>
</body>
</html>