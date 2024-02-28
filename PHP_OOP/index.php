<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "car.php";

        $car01 = new Car("BMW", "red");
        $car01->display_car();
    ?>
</body>
</html>