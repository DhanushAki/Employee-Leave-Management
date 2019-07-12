<?php
require_once('Reader/php-excel-reader/excel_reader2.php');
require_once('Reader/SpreadsheetReader.php');
?>

<!DOCTYPE html>
<html>    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
     Calendar
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="./style.css">
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <script src="./script.js"></script>
    <style>
        body{
            background-image: url('../image/backgroundIMG.jpg');
        }
    </style>
    
</head>

<body>
    <div class='datepicker'>
    <div class="datepicker-header"></div>
    </div>

    <div class="one">  
        <h2 style="font-size: 1.5em" align="center">List of holidays <?php echo date("Y"); ?></h2>
        <hr> 
	<?php 
       
		{       
       		$targetPath = '../uploads/List Of Holidays.xlsx';

      
        	$Reader = new SpreadsheetReader($targetPath);
        
            foreach ($Reader as $Row)
            {
                if(isset($Row[0]) && isset($Row[1])) 
                    
                    if($Row[0] != 'Date' && $Row[1] != 'Event')
                 		
                 		echo "<pre>",$Row[0]," \t",$Row[1],"</pre>";
                         
            }
		} 
	?>   
</div>
</body>
</html>