<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>Login System</title>
</head>
<body>
        <!--Sign Up Form -->
        <h1 id="title">Sign Up</h1> 
        <p id="description">Enter your details below to sign up.</p>

        <form action="includes/signup.inc.php" id="survey-form" method="post">

        <div id="form-group">
            <label id="name-label" for="username">Username</label>
            <input type="text" name="username" id="name" placeholder="Please Enter Your Username" >
        </div>

        <div id="form-group">
            <label id="number-label" for="pwd">Password</label>
            <input name="pwd" id="number" placeholder="Please Enter Your Password" min="0" max="120" >
        </div>

        <div id="form-group">
            <label id="email-label" for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Please Enter Your Email" >
        </div>
    
        <div id="form-group">
            <button type="submit" id="submit" class="submit-button">Sign up</button>
        </div>
        </form>
        
        <?php
            check_signup_errors();
        ?>

            <!--Login Sysytem -->
        <h1 id="title">Login</h1> 
        <p id="description">Enter your details below to Login.</p>

        <form action="includes/login.inc.php" id="survey-form" method="post">

        <div id="form-group">
            <label id="name-label" for="username">Username</label>
            <input type="text" name="username" id="name" placeholder="Please Enter Your Username" >
        </div>

        <div id="form-group">
            <label id="number-label" for="pwd">Password</label>
            <input name="pwd" id="number" placeholder="Please Enter Your Password" min="0" max="120" >
        </div>
    
        <div id="form-group">
            <button type="submit" id="submit" class="submit-button">Login up</button>
        </div>
        </form>

        <?php
            check_login_errors();
        ?>

        
</body>
</html>