<html>
<head>	
	<meta charset="utf-8">
</head>
<body>
	<?php
	session_start();
	$con=mysqli_connect("localhost","root","","test");
	if(!$con)
	{
		exit("error");
	}	
	if (isset($_POST['submit1'])) {
	$employee= $_POST['empid'];
	$sq1= $_POST['secret1'];
	$sq2= $_POST['secret2'];
	$sa1=$_POST['question1'];
	$sa2=$_POST['question2'];
	$_SESSION["employeeId"]=$employee;

	$sql="SELECT * FROM `profile_settings` WHERE empid ='$employee' AND secretq1='$sq1' AND secreta1='$sa1' AND secretq2='$sq2' AND secreta2='$sa2'";
	$result= $con->query($sql);
	if($result-> num_rows>0){
		while($row=$result->fetch_assoc()){
			echo"success";
		header("location: reset.html");
		}	
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Invalid answer or secret question");'; 
		echo 'window.location.href = "login.html";';
		echo '</script>';
	}
	}
	else{
		echo"not submitted";
	}
?>
</body>
</html>
