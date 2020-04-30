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
            <label>First name</label>
            <input type="text" name = "firstname" placeholder="Kelvin"/></br></br>
            <label>Last name</label>
            <input type="text" name = "lastname" placeholder="wachira"/></br></br>
            <label>username</label>
            <input type="text" name = "username" placeholder="kevo"/></br></br>
            <label>Email</label>
            <input type="text" name = "Email" placeholder="Kelvin@wachira.com"/></br></br>
            <label>Password</label>
            <input type="password" name = "userpassword" placeholder="*********" required/></br></br>
            <label>Confirm Password</label>
            <input type="password" name = "userpassword" placeholder="*********" required/></br></br>

            <input type="submit" name="submit"/>
            <a href="login.php" >login</a>
        </div>
        </form>


    </body>
</html>