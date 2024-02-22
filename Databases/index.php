
<link href='css/main.css' rel='stylesheet'>
<body>
        <h1 id="title">Sign Up</h1>
        <p id="description">Enter your details below to sign up.</p>

        <!-- -->
        <form action="includes/formhandler.inc.php" id="survey-form" method="post">

        <div id="form-group">
            <label id="name-label" for="username">Name</label>
            <input type="text" name="username" id="name" placeholder="Please Enter Your Username" required>
        </div>

        <div id="form-group">
            <label id="number-label" for="pwd">Password</label>
            <input name="pwd" id="number" placeholder="Please Enter Your Password" min="0" max="120" required>
        </div>

        <div id="form-group">
            <label id="email-label" for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Please Enter Your Email" required>
        </div>
    
        <div id="form-group">
    <button type="submit" id="submit" class="submit-button">Sign up</button>
    </div>
        </form>

        <!--Update User -->

        <h1 id="title">Updat User</h1>
        <p id="description">Update users details.</p>

        <!-- -->
        <form action="includes/userupdate.inc.php" id="survey-form" method="post">

        <div id="form-group">
            <label id="name-label" for="username">Name</label>
            <input type="text" name="username" id="name" placeholder="Please Enter Your Username" required>
        </div>

        <div id="form-group">
            <label id="number-label" for="pwd">Password</label>
            <input name="pwd" id="number" placeholder="Please Enter Your Password" min="0" max="120" required>
        </div>

        <div id="form-group">
            <label id="email-label" for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Please Enter Your Email" required>
        </div>
    
        <div id="form-group">
    <button type="submit" id="submit" class="submit-button">Update</button>
    </div>
        </form>

         <!--Delete User -->

         <h1 id="title">Delete User Account</h1>
        <p id="description">Enter your details below to sign up.</p>

        <!-- -->
        <form action="includes/userdelete.inc.php" id="survey-form" method="post">

        <div id="form-group">
            <label id="name-label" for="username">Name</label>
            <input type="text" name="username" id="name" placeholder="Please Enter Your Username" required>
        </div>

        <div id="form-group">
            <label id="number-label" for="pwd">Password</label>
            <input name="pwd" id="number" placeholder="Please Enter Your Password" min="0" max="120" required>
        </div>
    
        <div id="form-group">
    <button type="submit" id="submit" class="submit-button">Delete</button>
    </div>
        </form>

    </body>
