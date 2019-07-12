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
	if (isset($_POST['update'])) {
	$employee=$_SESSION["alogin"];
	$password1= $_POST['newpassword'];
	$password2= $_POST['confirmpassword'];

	$sql="UPDATE `personal_details` SET password='$password2' WHERE empid='$employee'";
	$result= $con->query($sql);
	echo '<script type="text/javascript">'; 
	echo 'alert("You have successfully reset password");'; 
	echo 'window.location.href = "login.html";';
	echo '</script>';
	}
	else{
		echo"not submitted";
	}
?>
</body>
</html>
