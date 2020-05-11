<!DOCTYPE html>
<?php
include 'appform.php';
$appinst = new App();
if(isset($_POST['user_Email']) && isset($_POST['user_Password']) )
{
    $appinst ->Login($_POST['user_Email'], $_POST['user_Password']);
} 

?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    </head>
    <body>

          <form  method="POST" action="login.php">
            <div class="form-group, login_form1">
              <label >Email address</label>
              <input name="user_Email" type="email" class="form-control">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              <input name="user_Password" type="password" class="form-control" id="exampleInputPassword1">
              <br>
              <button type="submit" class="btn btn-primary"style = 'background-color: green' >Submit</button>
              <a href="signup.php"class="btn btn-primary" style = 'background-color: orange' >Create Account</a>
           
            </div>

          </form>
    </body>
    
     
</html>


