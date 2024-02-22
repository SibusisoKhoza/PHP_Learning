<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo "POST METHOD SUCCESSFUL. <br>";

    $name = htmlspecialchars($_POST["name"]);

    echo "My name is " . $name;

}