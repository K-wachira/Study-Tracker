
<header>
<link rel="stylesheet" href="css/index.css">


</header>
  
  
<?php 
    include 'appform.php';
    $newapp = new App();
    

    $users = $newapp->GetUserMailandName();
 
    

?>
  
  
 <body class = "main-body">

        <div class="grid-item">
            <div class = "heading" >        
                <a href="<?php echo'index.php?name=results&class=3'; ?>"><i class="fa"></i> Platform Users</a>
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
                                                    <th>Fistname</th>
                                                    <th>User ID</th>
                                                    <th>Email</th>
                                                    <th>User Level</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($users as $key => $value): ?>
                                                    <tr>

                                                        <div class="row">
                                                        <td><?php echo $value['first_name'];?> </td>                                          
                                                        <td><?php echo $value['ID'];?> </td> 
                                                        <td><?php echo $value['email_adress'];?> </td>                                          
                                                        <td><?php echo $value['user_level_id'];?> </td>                                                    
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
</body>


<?php

if ( $_SESSION['user_level_id']==  || $_SESSION['user_level_id']== 1){
    error_reporting(0);
    include 'footer.php';
    }
?>