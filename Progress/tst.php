<?php

echo'<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="Bar.css">
	<script type="text/javascript">
    function redirect()
    {
    window.location.href = "../Main-login/login.html";
    }
    </script>

</head>';
$conn = mysqli_connect("localhost","root","","test");
 if($conn->connect_error)
 {
 	die("Connection Failed");
 }

$s=$_POST["username"];
$x=0;
for ($i=1; $i <=$s ; $i++) { 
	$z = $_POST["proj".$i];
	$a = $_POST["desp".$i];
	$d = $_POST["Start".$i];
	$n = $_POST["end".$i];
	$b = $_POST["prog".$i];
	$c = strtotime($n)-strtotime($d);
	$e = abs(round($c/86400));
	$f = 100-$b;

	$sql1 = "SELECT project_name FROM statistics WHERE project_name = '$z'";
	$result= $conn->query($sql1);
		if($result-> num_rows>0){
			$sql2 = "UPDATE statistics SET description='$a', endd='$n', days='$e', progress='$b', remaining='$f' WHERE project_name = '$z'";
			if($conn->query($sql2)==TRUE)
	{
		$x=$x+1;
	}
		else
		{
			echo"Unable to update Project".$x." details<br>";
		}
	}
	else{
			$sql = "INSERT INTO statistics VALUES('$z','$a','$d','$n','$e','$b','$f')";
	if($conn->query($sql)==TRUE)
	{
		$x=$x+1;
	}
		else
		{
			echo"Unable to add Project".$x." details<br>";
		}

		}
	
}
if ($x == $s) {
	echo'
<body><br><br><br><br><br>
<br><br><br><br><br><br><br>
<div align="center" ><h1> Projects are Added</h1></div>
';
}
echo'<br><br><br><div align="center"><a href="bargraph1.html"style="color:#42ecf5;">Click here to add more projects</a></div><br><br><br>
<form>
<div align="center"><input class="but" type="button" name="Home" value="Home" height="25" onclick="redirect()"></div></form></body>
</html>';

?>