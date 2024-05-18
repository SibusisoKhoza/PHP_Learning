<!-- https://www.youtube.com/watch?v=NqP0-UkIQS4 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container my-5">
    <h2>List of Clients</h2>
    <a class="btn btn-primary" href="myshop/create.php" role="button">New Client</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
        <?php
        //Establish connection database
        $servername = 'localhost';
        $username = "root";
        $password = "";
        $database = "myshop";
        
        $connection = new mysqli($servername,$username,$password, $database);

        //Check connection
        if($connection->connect_error){
            die('Error: '. $connection->connect_error);
        }

        //Read All rows from Database
        $sql = 'SELECT * FROM clients';
        $results = $connection->query($sql);
        
        if(!$results){
            die('Invalid query'. $connection->error);
        }

        while($row = $results->fetch_assoc()){
            //print_r($row);

        echo "
        <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[phone]</td>
                <td>$row[address]</td>
                <td>$row[created_at]</td>
                <td>
                    <a class='btn btn-primary btn-sm' href='myshop/edit.php?id=$row[id]'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='myshop/delete.php?id=$row[id]'>Delete</a>
                </td>
             
            </tr>
        
        ";
        }
        ?>
        </tbody>
    </table>
</div>
    
</body>
</html>