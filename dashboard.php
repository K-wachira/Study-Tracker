
<?php 
    include 'appform.php';
    $newapp = new App();

    $class = 1;
    $progress = $newapp->Getprogress($_SESSION, $class);
    $form1 = $newapp->DashboardStats($_SESSION, 1);
    $form2 = $newapp->DashboardStats($_SESSION, 2);
    $form3 = $newapp->DashboardStats($_SESSION, 3);
    $form4 = $newapp->DashboardStats($_SESSION, 4);
?>

    
<div class = "main-body">
    <div class="grid-container "> 

        <!-- card 1 -->
        <div class="grid-item">
            <div class = "heading" >
            <a href="<?php echo'index.php?name=results&class=1'; ?>"><i class="fa"></i> Form 1</a>
            </div>
            <div class="card radius shadowDepth1">
            
                <div class="card__content card__padding">
                    
                    <!-- to be put in grid formn so as to have stats at the end -->
                    <article class="card__article">
                
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
                                            <?php foreach ($form1 as $key => $value): ?>
                                                <tr>
                                                    <?php $current= $value['Total_Units']; $total = $value['Number_of_units_completed']; $percent1 = round(($total/$current )*100,1); ?>
                                                    <style type ="text/css"> .outter1{ height: 15px; width: 300px; border:solid 1px #44f1A6; } .inner1{ height: 15px;
                                                    width:38.5%; color: #87ADD6; background-color:#87ADD6; } </style>

                                                    <div class="row">
                                                    <td><?php echo $value['Subject_name'];?> </td>
                                                    <td><progress value='<?php  echo $percent1;?>' max="100">10%</progress> </td>  
                                                    <td><?php echo $percent1; echo'%';?> </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                
                    </article>
                </div>
            </div>
        </div>    
                
        <!-- Card 2 -->
        <div class="grid-item">
            <div class = "heading" >
            <a href="<?php echo'index.php?name=results&class=2'; ?>"><i class="fa"></i> Form 2</a>    
            </div>
            <div class="card radius shadowDepth1">
            
                <div class="card__content card__padding">
                    
                    <!-- to be put in grid formn so as to have stats at the end -->
                    <article class="card__article">
                    
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
                                            <?php foreach ($form2 as $key => $value): ?>
                                                <tr>
                                                    <?php $current= $value['Total_Units']; $total = $value['Number_of_units_completed']; $percent2 = round(($total/$current )*100,1); ?>
                                                    <div class="row">
                                                    <td><?php echo $value['Subject_name'];?> </td>
                                                    <td><progress value='<?php  echo $percent2;?>' max="100">10%</progress> </td>       
                                                    <td><?php echo $percent2; echo'%';?> </td>                                                    
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                    
                    </article>
                </div>
            </div>
        </div>


        <!-- Card 3 -->
        <div class="grid-item">
            <div class = "heading" >        
                <a href="<?php echo'index.php?name=results&class=3'; ?>"><i class="fa"></i> Form 3</a>
            </div>
                <div class="card radius shadowDepth1">
                
                    <div class="card__content card__padding">
                        
                        <!-- to be put in grid formn so as to have stats at the end -->
                        <article class="card__article">
                        
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
                                                <?php foreach ($form3 as $key => $value): ?>
                                                    <tr>
                                                        <?php $current= $value['Total_Units']; $total = $value['Number_of_units_completed']; $percent3 = round(($total/$current )*100,1); ?>

                                                        <div class="row">
                                                        <td><?php echo $value['Subject_name'];?> </td>                                          
                                                        <td><progress value='<?php  echo $percent3;?>' max="100">10%</progress> </td>  
                                                        <td><?php echo $percent3; echo'%';?> </td>                                                    
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </section>
                                </div>
                            </div>
                    
                        </article>
                    </div>
                </div>
        </div>

       

        <!-- Card 4 -->
        <div class="grid-item">
            <div class = "heading" >        
                <a href="<?php echo'index.php?name=results&class=4'; ?>"><i class="fa"></i> Form 4</a>
                </div>
                <div class="card radius shadowDepth1">
                
                    <div class="card__content card__padding">
                        
                        <!-- to be put in grid formn so as to have stats at the end -->
                        <article class="card__article">
                        
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
                                                <?php foreach ($form4 as $key => $value): ?>
                                                    <tr>
                                                        <?php $current= $value['Total_Units']; $total = $value['Number_of_units_completed']; $percent4 = round(($total/$current )*100,1); ?>

                                                        <div class="row">
                                                        <td><?php echo $value['Subject_name'];?> </td>                                          
                                                        <td><progress value='<?php  echo $percent4;?>' max="100"></progress> </td>  
                                                        <td><?php echo $percent3; echo'%';?> </td>                                                    
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </section>
                                </div>
                            </div>
                    
                        </article>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
    




        
