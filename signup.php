<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    </head>
    <body>
        
        <form method="POST" action="form.php">
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
        </div>
        </form>


    </body>
</html>