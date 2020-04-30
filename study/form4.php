<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/cards.css">
<link rel="stylesheet" href="../assets/css/style.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- This page displays different class levels i.e form 1 from 2 from 3 and form 4  -->

<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<?php

include 'appform.php';
$newapp = new App();

$progress = $newapp->Getprogress($_SESSION);

print_r($progress);

?>
<body class= "main-body">

    <div class="row">
       <div class="col-lg-12">
        <section class="panel">
            <a href="<?php echo URL . 'index.php?name=pages/newsubject'; ?>"><i class="fa fa-key"></i> edit</a>
            <header class="panel-heading">Form 4</header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>Subject Name</th>
                        <th>Class teacher</th>
                        <th>Number of Units</th>
                        <th>Units completed</th>
                        <th>Subject GPA</th>
                        <th>Number of Students</th>

                     
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($progress as $key => $value): ?>
                        <tr>
                            <div class="row">
                            <td><?php echo $value['Subject_name']; ?></td>
                            <td><?php echo $value['Class_teacher']; ?></td>
                            <td><?php echo $value['Total_Units']; ?></td>
                            <td><?php echo $value['Number_of_units_completed']; ?></td>
                            <td><?php echo $value['subject_gpa']; ?></td>
                            <td><?php echo $value['number_of_students']; ?></td>
                           
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
   


</body>