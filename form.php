
<?php

    require_once('db.php');

    if (isset($_POST['fullname']) && isset($_POST['Email']) )
    {   
        $fullname = $_POST['fullname'];
        $uname = $_POST['username'];
        $password =$_POST['password'];
        $email =$_POST['Email'];
        $hashedpass = md5($password); 
  
    $query = "INSERT INTO st_users (username,full_name,user_email,user_password) VALUES ('$uname', '$fullname' ,'$hashedpass', '$email')";   
    echo $query;  
       
    $results = mysqli_query($connection, $query);

    if ($results){
        echo"Records have been successfully Added";
    }
    else{
        echo "Not added".mysqli_error($connection);
    }

    }       
    

?>