<?php

if($_SERVER["REQUEST_METHOD"] = "POST"){

    $usersearch = $_POST["usersearch"];

    echo "userseach is " . $usersearch;
   
    #echo "Username" . $username . "<br>";
    #echo "PWD" . $pwd . "<br>";
    #echo "email" . $email . "<br>";

    try {
        require_once "includes/dbh.inc.php";
        #$query = "INSERT INTO users (username, pwd, email) VALUES ($username, $pwd, $email);";
        $query = "SELECT * FROM comments WHERE username = ?;";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$usersearch]);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //var_dump($results);

        $pdo = null;
        $stmt = null;
        
    } catch (PDOExcetion $e) {
      echo "Query failed" . $e->getMessage();
    }

}else{

    echo "Error occured";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h3>Search Results:</h3>
<?php
    if(empty($results)){
        echo "No data";
    }
    else{
        echo "results are: " . $results[0]['comment_text'] . "<br>";
        echo  var_dump($results);

        foreach($results as $row){
            echo "<br>-------------------------------------------------------------<br>";
            echo "Username: " . $row['username'] . "---<br>";
            echo "Comment text:  " . $row['comment_text'] . "---<br>";
        
        }
    }
?>

</body>
</html>