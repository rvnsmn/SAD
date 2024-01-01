<html lang="en" dir="ltr">
   <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="css/blotter.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head> 
   <body>
      <div class="container">
        <div class="title">Blotter</div>
        <form action="#">
        <div class="user-details">
            <div class="input-box">
                <label for="incident_date">Incident Date:</label>
                <input type="date" id="incident_date" name="incident_date" required><br>    
            </div>
            <div class="input-box">
                <label for="incident_time">Incident Time:</label>
            <input type="time" id="incident_time" name="incident_time" required><br>
            </div>
             <div class="input-box">
                <span class="details">Complainant's Name</span>
                <input type="text" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <span class="details">Complainant's Contact</span>
                <input type="text" placeholder="Enter your number" required>
            </div>
            <div class="input-box">
                <span class="details">Respondent's Name</span>
                <input type="text" placeholder="Enter your password" required>
            </div>
            <div class="input-box">
                <span class="details">Incident Location</span>
                <input type="text" placeholder="Confirm your password" required>
            </div>
        </div>
        <div class="gender-details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <input type="radio" name="gender" id="dot-3">
            <span class="gender-title">Gender</span>    
            <div class="category">
                <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Male</span>
                </label>
                <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                </label>
                <label for="dot-3">
                    <span class="dot three"></span>
                    <span class="gender">Prefer not to say</span>
                </label>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Submit">
        </div>
        </form>
      </div>
   </body>
</html>
 