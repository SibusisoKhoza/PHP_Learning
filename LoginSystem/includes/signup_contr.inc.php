<?php
declare(strict_types = 1);

// Takes care of querying the user input

function is_input_empty(string $username, string $pwd, string $email){
    if(empty($username) || empty($pwd) || empty($email)){
        return true;
    } else {
        return false;
    }
}
//Check if email is valid
function is_email_invalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    } else {
        return false;
    }
}

//Check if username is valid
function is_username_taken(object $pdo, string $username){
    if(get_username($pdo, $username)){
        return true;
    } else {
        return false;
    }
}

//Check if email is already registered
function is_email_registered(object $pdo, string $email){
    if(get_email($pdo, $email)){
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo, string $username, string $pwd, string $email){
    set_user($pdo, $username, $pwd, $email);
}