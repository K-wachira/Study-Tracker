<?php
  
    $appinst = new App();

    if(isset($_POST['emails']) && isset($_POST['changelevel']))

        {   
            echo "Update sucessful"
            $appinst-> UpdateUserLevel(($_POST['emails']), ($_POST['changelevel']));
        }


?>



  <form method="POST" action="index.php?name=manageusers">
      <div class="horizontal">
        <div class = "vertical ">
            <label>Enter User ID</label>
             <input type="text" name = "emails" placeholder="1,2,3,4,5,6,7,8,9" class = "form-control"/>
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

        <br>
        <br>

        <input type="submit" name="submit"/> 
   </form>
