<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    echo 'username: ' . $username . '<br>';
    echo 'password: ' . $pwd . '<br>';

    require_once 'dbh.inc.php';
    require_once 'login.model.inc.php';
    require_once 'login.contr.inc.php';

    $query = 'SELECT username FROM users WHERE username = :username';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "Results: " . $result;




}