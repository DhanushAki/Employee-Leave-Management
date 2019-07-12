<?php
require_once('Reader/php-excel-reader/excel_reader2.php');
require_once('Reader/SpreadsheetReader.php');

if (isset($_POST["import"]))
{
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  $allowedFileName = ['List Of Holidays.xlsx','List Of Holidays.xls'];
  if(in_array($_FILES['file']['name'], $allowedFileName)){
    
  

  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = '../uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
       
        $type = "success";
        $message = "Holidays List Is Updated";
      
  } 
}

else
  {   
        $type = "error";
        $message = "Invalid File Name. Upload Excel File with Name 'List Of Holidays'.";
  }
}

?>

<!DOCTYPE html>
<html>    
<head>
<style>    
body {
    position: absolute;
  left: 30%;
  padding: 10px;
  border-radius: 10px;
  width: 500px;
  background: #fff;
  margin: 50px auto;
  overflow: hidden;
    font-family: Arial; 
}

.outer-container {

	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 40px 20px;
	border-radius: 2px;
}

.btn-submit {
	background: #333;
	border: #1d1d1d 1px solid;
    border-radius: 2px;
	color: #f0f0f0;
	cursor: pointer;
    padding: 5px 20px;
    font-size:0.9em;
}


#response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
    display:none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}


div#response.display-block {
    display: block;
}
</style>
</head>

<body><center>
    <h2>Import Excel File to Update Holiday List</h2>
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel File</label> <br/><br/><input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
            </div>
        </form>
        <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    </div>
    </center>
</body>
</html>