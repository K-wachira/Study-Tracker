<?php





?>




<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    </head>
    <body>
        
        <form method="POST" action="newsubject.php">
            <div class="form-group , login_form1">
            <label>Enter Subject Name</label>
            <input type="text" name = "subjectname" placeholder=" eg English"/></br></br>
            <label>Enter Class Name</label>
            <input type="text" name = "classname" placeholder="eg Form 4"/></br></br>
            <label>Totol number of Units</label>
            <input type="text" name = "numberofunits" placeholder="eg 12"/></br></br>
            <label>Total number of units done so far</label>
            <input type="text" name = "unitscompleted" placeholder="6"/></br></br>
            <label>Class teacher</label>
            <input type="text" name = "classteacher" placeholder="Joe" required/></br></br>
            <label>Number of students taking the Subject</label>
            <input type="text" name = "numberofstudents" placeholder="40" required/></br></br>
            <label>Average Student GPA</label>
            <input type="text" name = "studentgpa" placeholder="4.0" required/></br></br>
   
            <input type="submit" name="submit"/>
        </div>
        </form>


    </body>
</html>