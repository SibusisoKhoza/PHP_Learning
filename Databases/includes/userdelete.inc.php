<?php

if($_SERVER["REQUEST_METHOD"] = "POST"){

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    #echo "Username" . $username . "<br>";
    #echo "PWD" . $pwd . "<br>";
    #echo "email" . $email . "<br>";

    try {
        require_once "dbh.inc.php";
        #$query = "INSERT INTO users (username, pwd, email) VALUES ($username, $pwd, $email);";
        #$query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id=2;";
        $query = "DELETE FROM users WHERE username = ? AND pwd = ?;";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $pwd]);
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