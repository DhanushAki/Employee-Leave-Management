<?php
session_start();
	$con=mysqli_connect("localhost","root","","test");
	if(!$con)
	{
		exit("error");
	}	
	if (isset($_GET['submit3'])) {}
	else {
		echo "not submit";
	}	


	$eid = $_SESSION["alogin"];

    $cn= $_GET['companyname'];
    
    $ca = $_GET['companyaddress'];
     
    $doj = $_GET['dateofjoin'];
     
    $dor = $_GET['dateofrelieving'];
     
    $d = $_GET['designation'];
 
    $jt = $_GET['jobtype'];
 
    $rfl = $_GET['reasonforleaving'];

    $sql1 = "SELECT  `empid` FROM `experience_details` where empid ='$eid'";
    $result= $con->query($sql1);
	if($result-> num_rows>0){
		$sql2 = "UPDATE `experience_details` SET `companyname`='$cn',`companyaddress`='$ca',`dateofjoin`='$doj',`dateofrelieving`='$dor',`designation`='$d',`jobtype`='$jt',`reason`='$rfl' WHERE empid ='$eid'";
		if(!mysqli_query($con,$sql2))
		{
				die('Error:'.mysqli_error($con));
		}
		else{
			echo '<script type="text/javascript">'; 
			echo 'alert("You Have Successfully Updated Your Details!");'; 
			echo 'window.location.href="EM.html";';
			echo '</script>';	
		}
	}
	else{
		$sql3 = "INSERT INTO `experience_details` (`empid`,`companyname`, `companyaddress`, `dateofjoin`,`dateofrelieving`,`designation`,`jobtype`,`reason`)VALUES ('$eid','$cn', '$ca','$doj','$dor','$d','$jt','$rfl')";
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