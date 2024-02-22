<?php
declare(strict_types = 1);

//Displays output to the user.

function  check_signup_errors(){
    if(isset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach($errors as $error){
            echo $error . "<br>";
        }

        unset($_SESSION['errors_signup']);
    } else if(isset($_GET['signup']) && $_GET['signup'] === 'success'){
        echo "<br>Sign up success!";
    }
}