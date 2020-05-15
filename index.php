
<?php
session_start();

    if ($_SESSION['user_level_id'] == 1 || $_SESSION['user_level_id']== 3){
    include 'header.php';
    }
    else{
        include 'defaultheader.php';
    }
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Study Tracker</title>
    <link rel="icon" type="image/ico" href="images/emirates.jpg" />


<!-- load css  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/cards.css">

</head>
 



<div class="sidenav"> 
    <div class = "usernav">
        <div class="ProfileNav"> 
            <img src="images/Preciosa.jpeg" alt="Avatar" class="avatar">
            <div class ="usernames">
              <p> <?php echo($_SESSION['username']);?> </p>    
            </div>
            
        </div>
      
    </div>

    <div class="sidenav-wrapper"> 
        <a href="index.php?name=dashboard">Dashboard</a>
        <a href="index.php?name=editprofile">Profile</a>  
        <a href="index.php?name=Calendar">Calendar</a>
        <a href="index.php?name=logout">logout</a>
      
    </div>
      <div class ="manageusers">
        <a href="index.php?name=manageusers" >Manage Users</a>  
     </div>
</div>

<body>


</body>
 

<?php 


if(isset($_GET['name'])){
    $page =$_GET['name'];
    if($page == 'logout') {
        $_SESSION = array();
        session_destroy();
    }
    $pageload = $page.'.php';
    // echo $pageload;
    if (isset($_SESSION) && $_SESSION['isloggedin']) {  
    
    if (in_array($page, $_SESSION['accss_rights'])) {
        include($pageload);
    } else {
        $page = 'dashboard';
    }
    
} else {
    header("Location: login.php");
}

    include($pageload);
}





