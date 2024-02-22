<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); //sends data to the same page we are on?>" method="post"> 

<input type="number" name="num1" placeholder="Number 1">
<select name="operator" placeholder="Number 1">
    <option value="add">+</option>
    <option value="minus">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
</select>
<input type="number" name="num2" placeholder="Number 2">
<button type="submit">Calculate</button>
</form>
    
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
   $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
   $op = htmlspecialchars($_POST["operator"]);


//Error handling
    $errors = false;

    //Debuggin purposes
    //echo "num1 is " . $num1 . "<br>";
    //echo "num2 is " . $num2 . "<br>";
    //echo "Op is " . $op . "<br>";

    if(empty($num1) || empty($num2) || empty($op)){
        echo "please enter the correct data.";
        $errors = true;
    }

    //Calc the number if we do not have errors.

    if(!$errors){
        
        switch($op){
            case "add":
                $value = $num1 + $num2;
                break;
            case "minus":
                $value = $num1 - $num2;
                break;
            case "multiply":
                $value = $num1 * $num2;
                break;
            case "divide":
                $value = $num1 / $num2;
                break;
            default:
                echo "Something went wrong";
        }
        echo "The results are: " . $value;
    }

}
?>
</body>
</html>