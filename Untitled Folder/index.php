<!-- <a href = "index.php?name=index">HOME </a>
<a href = "index.php?name=check">Calendar </a>
<a href = "index.php?name=dashboard">Dashboard </a>
<a href = "index.php?name=profile">Profile </a> -->

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<div class="sidenav">   
    <div class="sidenav-wrapper"> 
        <a href="index.php?name=dashboard">Dashboard</a>
        <a href="index.php?name=profile">Profile</a>  
        <a href="index.php?name=Calendar">Calendar</a>
        <a href="index.php?name=Syllabus">Syllabus</a>    


        <script type="text/javascript" src="../scripts/script.js"></script> 
    </div>
</div>





<?php

if(isset($_GET['name'])){

    $page =$_GET['name']; 
    $pageload = $page.'.php';

    include($pageload);


}



