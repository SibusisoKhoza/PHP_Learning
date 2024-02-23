<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {

        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';
        require_once 'login_view.inc.php';

        $errors = [];
        //error handling
        if(is_input_empty($username, $pwd)){
            $errors['empty_input'] = 'Fill in all fields!';
        }

        $results = get_user($pdo ,$username);
        var_dump($results);

        if(is_username_wrong($results)){
            $errors['login_incorrect'] = 'Incorect Login info!'; 
        }

        //if(!is_username_wrong($results) && is_password_wrong($pwd, $results['pwd'])){ //Check if password match?
         //   $errors['login_incorrect'] = 'Incorect Login info!'; 
//}
        
        require_once 'config_session.inc.php';

        if($errors){ //return false if there is no data in the array
            $_SESSION['errors_login'] = $errors;
            header('Location: ../index.php');
            echo "Error found";
            die();
        }

        $newSessionId = session_create_id();
        $sessionId= $newSessionId . "_" . $results['id'];
        session_id($sessionId);

        $_SESSION['user_id'] = $results['id'];
        $_SESSION['username'] = $results['username'];
        $_SESSION['last_regeneration'] = time();

        header('Location: ../index.php?login=success');
        $pdo = null;
        $stmt = null;

        die();
       
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

}else{
    header('Location: ../index.php');
    die();
}