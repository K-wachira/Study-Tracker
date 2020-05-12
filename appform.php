
<?php

include 'db.php';

class App extends DB {

    function signup($firstname, $Email, $lastname ,$username ,$userpassword){

        $first_name = $firstname;
        $last_name =$lastname;
        $uname =$username;
        $password = $userpassword;
        $email = $Email;
        $hashedpass = md5($password);

        echo ($first_name);
        
    
        $query = "INSERT INTO user_accounts (first_name,last_name,username,email_adress, user_passwords) VALUES ('$first_name', '$last_name', '$uname', '$email' ,'$hashedpass')";   
        echo $query;
        echo "here 2";
        
        $results = mysqli_query($this->_dbconn, $query);
        echo($results);

        if ($results)
        {
            echo"Records have been successfully Added";
            
            header("Location: login.php");
            // echo '<script type="text/javascript">window.location.href="assets/pages/calendar.php";</script>';

        }
        
        else{
            echo "Not added".mysqli_error($this->_dbconn);
        }

    }

    function Login( $UserEmail, $userpassword){
        $hashedpassword = md5($userpassword);
        $query = "SELECT * FROM  user_accounts WHERE email_adress='".$UserEmail."' AND user_passwords='".$hashedpassword."'";
        $result = mysqli_query($this->_dbconn, $query) or die(mysqli_errno());
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        print_r($row);
        if (!empty($row)){
            
            $accessrights = $this->GetAccessLevels($row['user_level_id']);

            session_start();
            $_SESSION['first_name'] =$row['first_name'];
            $_SESSION['last_name'] =$row['last_name'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_level_id']= $row['user_level_id'];
            $_SESSION['ID'] =   $row['ID'];
            $_SESSION['email_adress'] =   $row['email_adress'];
            $_SESSION['isloggedin'] =  true;  
            $_SESSION['accss_rights'] = explode(',',$accessrights['accss_rights']); 
            $_SESSION['user_level'] = $accessrights['user_level'];
            $_SESSION['user_level_id'] =  $row['user_level_id'];
  

            header("Location: index.php");
        
 

        }
    }


    function UpdateUserLevel($UserEmail, $Newlevel){
        $query ="UPDATE `user_accounts` SET `user_level_id` = $Newlevel WHERE `user_accounts`.`ID` =$UserEmail;";
        $results = mysqli_query($this->_dbconn, $query);
        echo($results);
        
        if ($results)
        {
            header("Location: index.php?name=manageusers");
            // echo '<script type="text/javascript">window.location.href="assets/pages/calendar.php";</script>';

        }

    }

    function GetAccessLevels($id) {
        $query = "SELECT * FROM st_access_rights WHERE user_level_id='" . $id . "'";
        $result = mysqli_query($this->_dbconn, $query)or die(mysqli_errno());
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $results = mysqli_query($this->_dbconn, $query);
        return $row;
    }



    function Getprogress($session, $class){
        $query = "SELECT * FROM st_class_progress WHERE class=".$class;
        $result = mysqli_query($this->_dbconn, $query)or die(mysqli_errno());
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $row;
    }


    function DashboardStats($session, $class){
        $query = "SELECT * FROM st_class_progress WHERE class=".$class;
        $result = mysqli_query($this->_dbconn, $query)or die(mysqli_errno());
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $row;
    }

    function GetUserMailandName(){
        $query = "SELECT * FROM user_accounts";
        $result = mysqli_query($this->_dbconn, $query)or die(mysqli_errno());
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $row;
    }


    function AddSubject($subjectname, $classname ,$numberofunits, $unitscompleted, $classteacher , $numberofstudents, $studentgpa){
        $query = "INSERT INTO st_class_progress (Subject_name,class,Number_of_units_completed,Total_Units, Class_teacher,number_of_students,subject_gpa) 
        VALUES ('$subjectname', '$classname', '$unitscompleted' ,'$numberofunits','$classteacher', '$numberofstudents' ,'$studentgpa')"; 
        $results = mysqli_query($this->_dbconn, $query);
  
        if ($results)
            {
             echo"Records have been successfully Added";
              header("Location: index.php");
            }
    }

}
?>


