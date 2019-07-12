<?php
session_start();
$x=$_SESSION["id"];

echo'<!DOCTYPE html>
<head>
<title >Daily project Submission </title>
<link href="dailywork_ss.css" type="text/css" rel="stylesheet"></head>
<body> 
<div class="bg-img">
<h1 align="center">Daily Work Submission</h1>
  <form action="dailyworkdatabase.php" method="POST" class="container">
    

    <label for="currentProject"><b>Current Project </b></label><br>
    <input type="text" placeholder="Enter Project Name" name="Project" required><br><br>

    <label for="leader"><b>Leader</b></label><br>
    <input type="text" placeholder="Under leadership of " name="leader" required><br><br>

    <label for="workAssigned"><b>Work assigned</b></label><br>
    <input type="text" placeholder="Enter work assigned " name="workAssigned" required><br><br>
    

    <label for="completedTasks"><b>Completed Count:</b></label>
    <input type="number" placeholder="completed count" name="completedTasks" required><br><br>
   

    <label for="remainingTasks"><b>Remaining Count:</b></label>
    <input type="number" placeholder="remaining count" name="remainingTasks" required>
    
    <br><br><br>

    <div class="btn1">
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" class="btn" value="Submit" align="center"/>
    </div>
    
  </form>
</div>
</body>
</html>';
?>