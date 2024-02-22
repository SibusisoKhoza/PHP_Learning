
<link href='css/main.css' rel='stylesheet'>
<body>
        <h1 id="title">Search</h1>
        <p id="description">Enter the user you want to search...</p>

        <!-- -->
        <form action="searchresults.php" id="survey-form" method="post">

        <div id="form-group">
            <label id="search-label" for="search">Search</label>
            <input type="text" name="usersearch" id="search" placeholder="Search for user..." required>
        </div>
    
        <div id="form-group">
    <button type="submit" id="submit" class="submit-button">Search</button>
    </div>
        </form>
