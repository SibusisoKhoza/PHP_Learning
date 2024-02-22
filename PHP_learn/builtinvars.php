<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built in Variables | Superglobals</title>
</head>
<body>
    <?php
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo var_dump($_ENV['USER'])
    //others include _ENV _GET, _POST, _REQUEST, _FILES, _COOKIE, _SESSION... 
    ?>
</body>
</html>