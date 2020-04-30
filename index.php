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
        <a href="index.php?name=form4">form4</a>  
        <a href="index.php?name=newsubject">Add</a>  




    </div>
</div>

<?php 




if (isset($_SESSION) && $_SESSION['isloggedin']) {
    if (in_array($page, $_SESSION['accss_rights'])) {
        include($pageload);
    } else {
        $page = 'index';
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
    include($pageload);
}
