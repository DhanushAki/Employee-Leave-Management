<?php
session_start();
	$con=mysqli_connect("localhost","root","","test");
	if(!$con)
	{
		exit("error");
	}	
	if (isset($_POST['submit4'])) {
			echo "submit";
		}
	else {
		echo "not submit";
	}	

	$eid = $_SESSION["alogin"];

    $tenth = $_POST['10thmarkscard'];
    
    $twelth = $_POST['markscard'];
     
    $grad = $_POST['graduationmarkscard'];
     
    $postgrad = $_POST['postgraduationmarkscard'];
     
    $resume = $_POST['resume'];
 
    $aadhar = $_POST['adhaarcard'];
 
    $pancard = $_POST['pancard'];
    
    $certificate = $_POST['certification'];

	$sql = "INSERT INTO `documents` (`empid`,`10th`, `12th`, `grad`,`postgrad`,`resume`,`aadhar`,`pancard`,`certificate`)VALUES ('$eid','$tenth','$twelth','$grad','$postgrad','$resume','$aadhar','$pancard','$certificate')";
	if(!mysqli_query($con,$sql))
	{
		die('Error:'.mysqli_error($con));
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("You Have Successfully Entered Your Details!");'; 
		echo 'window.location.href="EM.html";';
		echo '</script>';
		
	}
	mysqli_close($con);
?>