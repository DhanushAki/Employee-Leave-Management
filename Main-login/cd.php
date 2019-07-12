<?php
session_start();
	$con=mysqli_connect("localhost","root","","test");
	if(!$con)
	{
		exit("error");
	}	
	if (isset($_GET['submit2'])) {

	$eid = $_SESSION["alogin"];

    $hn = $_GET['homenumber'];
    
    $ea = $_GET['emailaddress'];
     
    $mn = $_GET['mobilenumber'];
     
    $ad1 = $_GET['addressline1'];
     
    $ad2 = $_GET['addressline2'];
 
    $city = $_GET['city'];
 
    $state = $_GET['state'];
    
    $permanentaddress = $_GET['optradio'];

    if($permanentaddress=="yes"){
    	$paddr1 = $ad1;
	    $paddr2 = $ad2;
	    $pcity = $city;
	    $pstate = $state;
    }
    else{

	    $paddr1 = $_GET['addr1'];
	     
	    $paddr2 = $_GET['addr2'];
	 
	    $pcity = $_GET['city1'];
	 
	    $pstate = $_GET['state1'];
	}

    $r = $_GET['relationship'];

    $fn = $_GET['fn'];

    $sn = $_GET['surname'];

    $cn = $_GET['contactnumber'];

    $sql1 = "SELECT  `empid` FROM `contact_details` where empid ='$eid'";
    $result= $con->query($sql1);
	if($result-> num_rows>0){
		$sql2 = "UPDATE `contact_details` SET `homenumber`='$hn', `emailid`='$ea', `mobilenumber`='$mn',`address1`='$ad1',`address2`='$ad2',`city`='$city',`state`='$state',`permanentaddress`='$permanentaddress',`permanentaddr1`='$paddr1',`permanentaddr2`='$paddr2',`permanentcity`='$pcity',`permanentstate`='$pstate',`relationship`='$r',`firstname`='$fn',`surname`='$sn',`contactnumber`='$cn' WHERE empid = '$eid'"; 
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
		$sql3 = "INSERT INTO `contact_details` (`empid`,`homenumber`, `emailid`, `mobilenumber`,`address1`,`address2`,`city`,`state`,`permanentaddress`,`permanentaddr1`,`permanentaddr2`,`permanentcity`,`permanentstate`,`relationship`,`firstname`,`surname`,`contactnumber`)VALUES ('$eid','$hn', '$ea','$mn','$ad1','$ad2','$city','$state','$permanentaddress', '$paddr1','$paddr2','$pcity','$pstate','$r','$fn','$sn','$cn')";
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
	}
		else {
		echo "Not submit";
	}
	mysqli_close($con);
?>