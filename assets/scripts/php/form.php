<?php


    function WhoAmI($firstname, $lastname ){
        echo "My name is ".$firstname." ".$lastname."</br>";


    }

    function SignUp($fullname, $uname , $password, $email){
        $hashedpass = md5($password);

        echo "The name of the user is ".$fullname." 
        Their email is ".$email." and their password is ".$hashedpass."<br.>";

    }


    if (isset($_POST['firstname']) && isset($_POST['lastname']))
    {

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $fullname = $_POST['fullname'];
        $uname = $_POST['username'];
        $password =$_POST['password'];
        $email =$_POST['Email'];

    WhoAmI($fname, $lname); 
    SignUp($fullname, $uname,$password,$email);     

    }

?>