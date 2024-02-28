<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {

        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';
        require_once 'login_view.inc.php';
        
        require_once 'config_session.inc.php';

       
        function validate_user($pdo, $username, $pwd){
            $query = 'SELECT * FROM users WHERE username = :username';
            $stmt = $pdo->prepare($query);
            $stmt->bindParam('username', $username);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            //var_dump($result);
            //Check password
           

            if($result & !empty($result)){
                echo "Hashed password: " . $hashedPwd . "<br>";
                echo "password verify password: " . password_verify($pwd, $hashedPwd) . "<br>";

                echo "Username: " . $result['username'] . "<br>";
                echo "DB Password: " . $result['pwd'] . "<br>";
                //echo "Password " . $pwd . "<br>";
                //hash password first
    
                $hashedPwd = $result['pwd'];

            if(password_verify($pwd, $hashedPwd)){
                echo "Password is the same.";
            } else {
                echo "Wrong password.";
            }
            } else {
                echo "User not found!";
            }
        }

        validate_user($pdo, $username, $pwd);

        die();
       
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

}else{
    header('Location: ../index.php');
    die();
}