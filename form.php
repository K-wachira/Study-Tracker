
<?php

    require_once('db.php');

    if (isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['lastname']) && isset($_POST['username'])  && isset($_POST['userpassword']))
    {   
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $uname = $_POST['username'];
        $password =$_POST['userpassword'];
        $email =$_POST['Email'];
        $hashedpass = md5($password);
    
  
    $query = "INSERT INTO user_accounts (first_name,last_name,user_names,email_adress, user_passwords) VALUES ('$first_name', '$last_name', '$uname', '$email' ,'$hashedpass')";   
    echo $query;  
       
    $results = mysqli_query($connection, $query);
    

    if ($results)
    {
        echo"Records have been successfully Added";
        $action_page = "index.html";
    }
    
    else{
        echo "Not added".mysqli_error($connection);
    }
}
    // echo '<form name ="redirect_user"id = "redirect_user" method = "POST"'.  'action="'.$action_page.'">
    // <input type = text"text" name = "msg" value ="'.$msg.'"/>'
    // .' </form>';


    // // java script redirect

    // echo '<script language="Javascript" type = "text/javascript"> '
    // .'window.onload = function() { window.document.redirect_user.submit();}'. '</script>';


    

    

?>