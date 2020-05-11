<!DOCTYPE html>


<?php
include 'appform.php';
$appinst = new App();

if(isset($_POST['firstname']) && isset($_POST['Email']) && isset($_POST['lastname']) && isset($_POST['username'])  && isset($_POST['userpassword']))
   {   
    $appinst-> signup(($_POST['firstname']), ($_POST['Email']), ($_POST['lastname']) ,($_POST['username']) ,($_POST['userpassword']));
   }
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    </head>
    <body>
        
        <form method="POST" action="signup.php">
             <div class="form-group , login_form1">

             <div class="form-group">
                <label >First name:</label>
                <input  name="firstname" type="text" required>
             </div>

            <div class="form-group">
                <label >Last name:</label>
                <input class="form-control" id="retirement_age" name="lastname" type="text" required>
            </div>

            <div class="form-group">
                <label for="retirement_age">Username:</label>
                <input class="form-control" id="retirement_age" name="username" type="text" required>
            </div>

            <div class="form-group">
                <label for="retirement_age">Email:</label>
                <input class="form-control" id="retirement_age" name="Email" type="email" required>
            </div>

            <div class="form-group">
                <label for="retirement_age">Password:</label>
                <input class="form-control" id="retirement_age" name="userpassword" type="password" required>
            </div>

            <div class="form-group">
                <label for="retirement_age">Confirm Password:</label>
                <input class="form-control" id="retirement_age" name="userpassword" type="password" required>
            </div>


            <button type="submit" class="btn btn-primary"style = 'background-color: green' >Submit</button>
            <a href="login.php"class="btn btn-primary" style = 'background-color: orange' >Log in</a>

        </div>
        </form>


    </body>
</html>