<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="css/cards.css">
<!-- This page displays different class levels i.e form 1 from 2 from 3 and form 4  -->

<link rel="stylesheet" href="css/bootstrap.min.css">


</head>

<?php 
    include 'appform.php';
    $newapp = new App();
    $progress = $newapp->Getprogress($_SESSION);

?>

<body class= "main-body">

    <!-- card 1 -->
 <div class="grid-container"> 
    <div class="grid-item">
        <div class = "heading" >
            <h1><a href="#">Form 1</a></h1>
        </div>
        <div class="card radius shadowDepth1">
        
            <div class="card__content card__padding">
                
                <!-- to be put in grid formn so as to have stats at the end -->
                <article class="card__article">
                    <h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <table class="table table-striped table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th>Subject Name</th>
                                                <th>Progres</th>
                                                <th>% Covered</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($progress as $key => $value): ?>
                                                <tr>
                                                    <?php $current= $value['Total_Units']; $total = $value['Number_of_units_completed']; $percent1 = round(($current/$total )*100,1); ?>
                                                    <style type ="text/css"> .outter1{ height: 15px; width: 300px; border:solid 1px #44f1A6; } .inner1{ height: 15px;
                                                    width:38.5%; color: #87ADD6; background-color:#87ADD6; } </style>

                                                    <div class="row">
                                                    <td><?php echo $value['Subject_name'];?> </td>
                                                    <td><div class = 'outter1'> <div class ='inner1'></div> </div></td>  
                                                    <td><?php echo $percent1; echo'%';?> </td>
                                                    
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </h2>
                </article>
            </div>
        </div>
    </div>    
    
    <!-- Card 2 -->


    <div class="grid-item">
        <div class = "heading" >
            <h1><a href="#">Form 2</a></h1>
        </div>
        <div class="card radius shadowDepth1">
        
            <div class="card__content card__padding">
                
                <!-- to be put in grid formn so as to have stats at the end -->
                <article class="card__article">
                    <h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <table class="table table-striped table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th>Subject Name</th>
                                                <th>Progres</th>
                                                 <th>% Covered</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($progress as $key => $value): ?>
                                                <tr>
                                                    <?php $current= $value['Total_Units']; $total = $value['Number_of_units_completed']; $percent2 = round(($current/$total )*100,1); ?>
                                                    <style type ="text/css"> .outter2{ height: 15px; width: 300px; border:solid 1px #44f1A6; } .inner{ height: 15px;
                                                     width: <?php  echo $percent2;?>%; color: #87ADD6; background-color:#FFC03D; } </style>

                                                    <div class="row">
                                                    <td><?php echo $value['Subject_name'];?> </td>
                                                    <td><div class = 'outter'> <div class ='inner'></div> </div></td>  
                                                    <td><?php echo $percent2; echo'%';?> </td>                                                    
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </h2>
                </article>
            </div>
        </div>
    </div>

    <!-- Card 3 -->

    <div class="grid-item">
    <div class = "heading" >
        <h1><a href="#">Form 3</a></h1>
        </div>
        <div class="card radius shadowDepth1">
        
            <div class="card__content card__padding">
                
                <!-- to be put in grid formn so as to have stats at the end -->
                <article class="card__article">
                    <h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <table class="table table-striped table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th>Subject Name</th>
                                                <th>Progres</th>
                                                <th>% Covered</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($progress as $key => $value): ?>
                                                <tr>
                                                    <?php $current= $value['Total_Units']; $total = $value['Number_of_units_completed']; $percent3 = round(($current/$total )*100,1); ?>
                                                    <style type ="text/css"> .outter{ height: 15px; width: 300px; border:solid 1px #44f1A6; } .inner{ height: 15px;
                                                     width: <?php  echo $percent3;?>%; color: #87ADD6; background-color:#87ADD6; } </style>

                                                    <div class="row">
                                                    <td><?php echo $value['Subject_name'];?> </td>
                                                    <td><div class = 'outter'> <div class ='inner'></div> </div></td>  
                                                    <td><?php echo $percent3; echo'%';?> </td>                                                    
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </h2>
                </article>
            </div>
        </div>
    </div>

    <!-- Card 4 -->


    <div class="grid-item">
    <div class = "heading" >
        <h1><a href="#">Form 4</a></h1>
        </div>
        <div class="card radius shadowDepth1">
        
            <div class="card__content card__padding">
                
                <!-- to be put in grid formn so as to have stats at the end -->
                <article class="card__article">
                    <h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <table class="table table-striped table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th>Subject Name</th>
                                                <th>Progres</th>
                                                <th>% Covered</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($progress as $key => $value): ?>
                                                <tr>
                                                    <?php $current= $value['Total_Units']; $total = $value['Number_of_units_completed']; $percent4 = round(($current/$total )*100,1); ?>
                                                    <style type ="text/css"> .outter{ height: 15px; width: 300px; border:solid 1px #44f1A6; } .inner{ height: 15px;
                                                     width: <?php  echo $percent4;?>%; color: #87ADD6; background-color:#87ADD6; } </style>

                                                    <div class="row">
                                                    <td><?php echo $value['Subject_name'];?> </td>
                                                    <td><div class = 'outter'> <div class ='inner'></div> </div></td>  
                                                    <td><?php echo $percent4; echo'%';?> </td>                                                    
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </h2>
                </article>
            </div>
        </div>
    </div>
 


</div>
  </div>


</body>
</html> 
        