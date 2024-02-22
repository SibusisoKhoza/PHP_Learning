<?php

$dsn = "mysql:host=160.119.252.16;dbname=afribizt_test";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExcetion $e) {
  echo "Connection Failed" . $e->getMessage();
}