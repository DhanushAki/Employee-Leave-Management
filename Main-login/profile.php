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
		$eid = $_SESSION["alogin"];

	    $secretq1 = $_POST['sq1'];   

	    $secreta1 = $_POST['ans1'];
	   
	    $secretq2 = $_POST['sq2'];
	   
	    $secreta2 = $_POST['ans2'];

	    $profilelink1 = $_POST['link1'];

	    $profilelink2 = $_POST['link2'];

	    $sql1 = "SELECT  `empid` FROM `profile_settings` where empid ='$eid'";
	    $result= $con->query($sql1);
		if($result-> num_rows>0){
			$sql2 = "UPDATE `profile_settings` SET `secretq1` = '$secretq1', `secreta1`='$secreta1', `secretq2`='$secretq2', `secreta2`='$secreta2',`profilelink1`='$profilelink1' ,`profilelink2`='$profilelink2'  WHERE empid ='$eid'"; 
			if(!mysqli_query($con,$sql2))
			{
				die('Error:'.mysqli_error($con));
			}
			else{
				echo '<script type="text/javascript">'; 
				echo 'alert("You Have Successfully Updated your details!");'; 
				echo 'window.location.href="EM.html";';
				echo '</script>';
			}
		}
		else{
			$sql3 = "INSERT INTO `profile_settings`(`empid`,`secretq1`, `secreta1`, `secretq2`, `secreta2`, `profilelink1`,`profilelink2`) VALUES ('$eid','$secretq1', '$secreta1','$secretq2','$secreta2','$profilelink1','profilelink2')";
			if(!mysqli_query($con,$sql3))
			{
				die('Error:'.mysqli_error($con));
			}
			else{
				echo '<script type="text/javascript">'; 
				echo 'alert("You Have Successfully Entered Your Details!");'; 
				echo 'window.location.href="EM.html";';
				echo '</script>';
			}
		}
	mysqli_close($con);
	?>
</body>
</html>