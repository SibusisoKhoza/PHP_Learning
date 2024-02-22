<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes in PHP</title>
</head>
<body>
    <?php
        $globalscope = "This is a global scope";

        function vari(){

            $name = "Sibusiso"; //this is a local scope.
            //To access a global variable. use "global" or $GLOBALS["var"]
        }


        //static variable. Shared amongst all scripts.

        //Class scope
    ?>

</body>
</html>