<?php

if($_SERVER["REQUEST_METHOD"] = "POST"){

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    #echo "Username" . $username . "<br>";
    #echo "PWD" . $pwd . "<br>";
    #echo "email" . $email . "<br>";

    $hashedpass = password_hash($pwd, PASSWORD_BCRYPT);

    try {
        require_once "dbh.inc.php";
        #$query = "INSERT INTO users (username, pwd, email) VALUES ($username, $pwd, $email);";
        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $hashedpass, $email]);
        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die();
        
    } catch (PDOExcetion $e) {
      echo "Query failed" . $e->getMessage();
    }

}else{

    echo "Error occured";
}