<!-- <a href = "index.php?name=index">HOME </a>
<a href = "index.php?name=check">Calendar </a>
<a href = "index.php?name=dashboard">Dashboard </a>
<a href = "index.php?name=profile">Profile </a> -->


<?php
session_start();
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/dropdown.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
 



<div class="sidenav">   
    <div class="sidenav-wrapper"> 
        <span class ="username">
          <p>User name</p>
          <p> <?php echo($_SESSION['username']);?> </p>     
        </span>
        <a href="index.php?name=dashboard">Dashboard</a>
        <a href="index.php?name=editprofile">Profile</a>  
        <a href="index.php?name=Calendar">Calendar</a>
        <a href="index.php?name=logout">logout</a>  
        <a href="index.php?name=results&class=1">form4</a>  
        <a href="index.php?name=newsubject">Add</a>  
    </div>
</div>
 

<?php 

if (isset($_SESSION) && $_SESSION['isloggedin']) {
    if (in_array($page, $_SESSION['accss_rights'])) {
        include($pageload);
    } else {
        $page = 'dashboard';
    }
    
} else {
    header("Location: login.php");
}



if(isset($_GET['name'])){
    $page =$_GET['name'];
    if($page == 'logout') {
        $_SESSION = array();
        session_destroy();
    }
    $pageload = $page.'.php';
    // echo $pageload;
    include($pageload);
}
