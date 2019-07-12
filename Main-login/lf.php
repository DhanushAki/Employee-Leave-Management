<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 	
	session_start();

	$con=mysqli_connect("localhost","root","","test");
	if(!$con)
	{
		exit("error");
	}
	$en = $_GET['ename'];
	$eid = $_GET['eid'];
	$sn = $_GET['supervisorname'];
	$r = $_GET['rfl'];
	$rdes = $_GET['Des'];
	$ld = $_GET['leavedate'];
	$rd = $_GET['returndate'];
	$td= $_GET['numdays'];
	$hd = $_GET['day'];
	$st = '0';

	$in = "INSERT INTO leaveform VALUES ('$eid','$en','$sn','$r','$rdes','$ld','$rd','$td','$hd','$st')";
	if($con->query($in)==TRUE)
	{
		echo '<script type="text/javascript">'; 
				echo 'alert("Request Sent Successfully!");'; 
				echo 'window.location.href="EM.html";';
				echo '</script>';
	}
		else
		{
			die('Error:'.mysqli_error($con));
		}
	mysqli_close($con);
	?>
</body>
</html>
	


