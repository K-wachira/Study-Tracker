
<header>
<link rel="stylesheet" href="css/index.css">


</header>
  
  
<?php 

 if(isset($_POST['changelevel']) && isset($_POST['emails']))
    echo $_POST['changelevel'];
    echo $_POST['emails'];
    
    
    

?>
  
  
 <body class = "main-body">

  <form method="POST" action="manageusers.php">
      <div class="horizontal">
        <div class = "vertical ">
            <label>Email goes here</label>
             <input type="text" name = "emails" placeholder="Kelvin@wachira.com" class = "form-control"/>
        </div>
            <div>
                <label >Choose User Level</label>

                <select class="form-control" name = "changelevel" >
                <option value = "1">Admin</option>
                <option value = "2">Viewer</option>
                <option value = "3">Supper Admin</option>
                </select>
            </div>
        </div>

        <input type="submit" name="submit"/>
    </form>

</body>