
<link href='css/form.css' rel='stylesheet'>
<body>
        <h1 id="title">Sibusiso Code Survey</h1>
        <p id="description">Thank you for participating in my coding survey</p>

        <!-- -->
        <form action="includes/formhandler.php" id="survey-form" method="post">

        <div id="form-group">
            <label id="name-label" for="label">Name</label>
            <input type="text" name="name" id="name" placeholder="Please Enter Your Name" required>
        </div>

        <div id="form-group">
            <label id="email-label" for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Please Enter Your Email" required>
        </div>

        <div id="form-group">
            <label id="number-label" for="number">Age</label>
            <input type="number" name="number" id="number" placeholder="Please Enter Your Age" min="0" max="120" required>
        </div>

        <div id="form-group">
            <p id="des">Which of these options describe you?</p>
            <select  id="dropdown" name="role">
            <option id="des" disabled="" selected="" value="">Select current role</option>
                <option value="work">Employed Full Time</option>
                <option value="student">Student</option>
                <option value="other">Other</option>
                <option value="self_employed">Self Employed</option>
            </select>
        </div>

        <div id="form-group">
            <p id="des">Do you know how to code?.</p>

            <label>
        <input name="yes" value="yes" type="radio" class="input-radio" checked="">Yes</label>


        <label>
        <input name="yes" value="no" type="radio" class="input-radio">No</label>

            </div>

      
           <div id="form-group">
    <p id="des">
    Which of this languages do you know?
    <span class="clue">(Check all that apply)</span>
    </p>
    <label><input name="prefer" value="c" type="checkbox" class="input-checkbox">C</label>
    <label>
        <input name="prefer" value="c++" type="checkbox" class="input-checkbox">C++</label>
    <label><input name="prefer" value="html" type="checkbox" class="input-checkbox">HTML</label>
    <label><input name="prefer" value="javascript" type="checkbox" class="input-checkbox">JavaScript</label>

    
        </div>


            <div id="form-group">
    <p id="des">Any comments or suggestions?</p>
    <textarea id="comments" class="input-textarea" name="comment" placeholder="Enter your comment here..."></textarea>
    </div>

        <div id="form-group">
    <button type="submit" id="submit" class="submit-button">Submit</button>
    </div>

        </form>

    </body>
