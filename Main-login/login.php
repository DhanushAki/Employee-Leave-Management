<html>
<head>	
	<meta charset="utf-8">
</head>
<body>
<?php
	session_start();
	$con=mysqli_connect("localhost","root","","Test");
	if(!$con)
	{
		exit("error");
	}
	if (isset($_POST['submit'])) {
	$uname=$_POST['username'];
	$password=($_POST['password']);

	$sql="SELECT * FROM `admin` WHERE Username ='$uname' AND  Password='$password'";
	$result= $con->query($sql);
	if($result-> num_rows>0){
		
		while($row=$result->fetch_assoc()){
			if(($_POST['username'] == "admin"))
		{
			$_SESSION['alogin'] = $_POST['username'];
			if(strlen($_SESSION['alogin']) != 0)
    	{  
    		
    		echo "<script type='text/javascript'> document.location = '../admin/dashboard.php'; </script>";
		}	
			
		}

	}
}
	$sql="SELECT * FROM `personal_details` WHERE empid ='$uname' AND  password='$password'";
	$result= $con->query($sql);
	if($result-> num_rows>0){
		if($result-> num_rows>0){
		$_SESSION['alogin'] = $_POST['username'];	
		header("location: EM.html");
		}	
	}

	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Invalid username or password");'; 
		echo 'window.location.href = "login.html";';
		echo '</script>';
		
	}
	}
?>	
</body>
</html>
