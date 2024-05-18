<?php

 //Establish connection database
 $servername = 'localhost';
 $username = "root";
 $password = "";
 $database = "myshop";
 
 $connection = new mysqli($servername,$username,$password, $database);


$name = "";
$email = "";
$phone = "";
$address = "";
//echo "Request method: " . $_SERVER['REQUEST_METHOD'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];

  do{
    if(empty($name) || empty($email) || empty($phone) || empty($address)){
      $errorMessage = 'All fields are required';
      break;
    }
    //Add new client to database

    $sql = "INSERT INTO clients (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";



    $results = $connection->query($sql);
        
        if(!$results){
            die('Invalid query'. $connection->error);
            break;
    }

    $name = "";
    $email = "";
    $phone = "";
    $address = "";

    $successMessage = 'Client added succesfully';

    header("location: ../index.php");


  } while(false);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="container my-5">
    <h2>New Client</h2>

    <?php
    if(!empty($errorMessage)){
      echo "error message";
    }
    ?>

    <form method="post">
      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Phone</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="phone" value="<?php echo $phone ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Address</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="address" value="<?php echo $address ?>">
        </div>
      </div>
      <?php
    if(!empty($successMessage)){
      echo "Success message";
    }
    ?>
      <div class="row mb-3">
        <div class="offset-sm-3 col-sm-3 d-grid">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="col-sm-3 d-grid">
          <a href="../index.php" class="btn btn-primary d-grid">Cancel</a>
            </div>
        </div>
      </div>
    </form>
</div>
</head>
<body>
    
</body>
</html>