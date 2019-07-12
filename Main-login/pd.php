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
	
	$fname = $_GET['firstname'];   

    $lname = $_GET['lastname'];
   
    $dob = $_GET['dateofbirth'];
   
    $nat = $_GET['nationality'];

    if($nat == 'other'){
    	$nat = $_GET['othercountry'];
    }

    $gender = $_GET['gender'];

    $mstatus = $_GET['maritalstatus'];

    $edu = $_GET['education'];

    $sub = $_GET['specifysubject'];

    $certi = $_GET['certification'];
    
    $exp = $_GET['experience'];

	{
		$sql2 = "UPDATE `personal_details` SET `firstname` = '$fname', `lastname`='$lname', `dateofbirth`='$dob', `nationality`='$nat', `gender`='$gender',`maritalstatus`='$mstatus', `education`='$edu',`specifysubject`='$sub', `certification`='$certi', `experience`='$exp' WHERE empid ='$eid'"; 
		if(!mysqli_query($con,$sql2))
		{
			die('Error:'.mysqli_error($con));
		}
		else{
			echo '<script type="text/javascript">'; 
			echo 'alert("You Have Successfully Updated your details! ");'; 
			echo 'window.location.href="EM.html";';
			echo '</script>';
		}
	}
	mysqli_close($con);
	?>
</body>
</html>