<!DOCTYPE html>

<?php
include 'appform.php';
$appinst = new App();



if(isset($_POST['subjectname']) && isset($_POST['classname']) && isset($_POST['numberofunits']) && isset($_POST['unitscompleted'])  && isset($_POST['classteacher']) && isset($_POST['numberofstudents'])  && isset($_POST['studentgpa']))
   {   

    $subjectname = $_POST['subjectname'];
    $classname = $_POST['classname'];
    $numberofunits = $_POST['numberofunits'];
    $unitscompleted = $_POST['unitscompleted'];
    $classteacher =$_POST['classteacher'];
    $numberofstudents = $_POST['numberofstudents'];
    $studentgpa =$_POST['studentgpa'];

    $appinst-> AddSubject($subjectname, $classname ,$numberofunits, $unitscompleted, $classteacher , $numberofstudents, $studentgpa);
   }


?>



     <form method="POST" action="newsubject.php">
           
        <section class="panel">
             <header class="panel-heading">
                Add a Subject:
            </header>


            <div class="form-group , login_form1">
                <div class="form-group">
                    <label for="retirement_age">Subject Name:</label>
                    <input class="form-control" id="retirement_age" name="subjectname" type="text">
                </div>

                <div class="form-group">
                    <label for="annual_contribution">Select class:</label>
                    <select class="form-control input-sm m-bot15 billgroup" name="classname">
                 
                        <option value="1">Form 1</option>
                        <option value="2">Form 2</option>
                        <option value="3">Form 3</option>
                        <option value="4">Form 4</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="retirement_age">Total Units:</label>
                    <input class="form-control" id="retirement_age" name="numberofunits" type="text">
                </div>

                <div class="form-group">
                    <label for="retirement_age">Units Completed:</label>
                    <input class="form-control" id="retirement_age" name="unitscompleted" type="text">
                </div>

                <div class="form-group">
                    <label for="retirement_age">Teacher Incharge:</label>
                    <input class="form-control" id="retirement_age" name="classteacher" type="text">
                </div>

                <div class="form-group">
                    <label for="retirement_age">Number of Students:</label>
                    <input class="form-control" id="retirement_age" name="numberofstudents" type="text">
                </div>

                <div class="form-group">
                    <label for="retirement_age">Average GPA:</label>
                    <input class="form-control" id="retirement_age" name="studentgpa" type="text">
                </div>


                <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                </div>

            </section>    
        </form>