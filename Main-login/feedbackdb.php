<?php 	
	$u = $_POST['pw'];
	$d = $_POST['Duration'];
	$f = $_POST['feedback'];
	$p = $_POST['pos'];
	$r = $_POST['Rating'];

	if(!empty($u) || !empty($d) || !empty($f) || !empty($p) || !empty($r))
	{
		$conn = mysqli_connect("localhost","root","","test"); 
	}
	else
		die("Could not connect");

	$in = "INSERT INTO feedback VALUES ('$u','$d','$f','$p','$r')";
	echo'<html><head><title>Record added</title>
	<style>
	body {
	background-image: url(http://www.forbesindia.com/media/images/2018/Oct/img_110009_bg_shutterstock_551903329.jpg);
	background-size: cover;
    background-attachment: fixed;
    }
    </style></head>
    <body >';

	if($conn->query($in)==TRUE)
	{
		echo" <h1 align = 'center'> <b> Record added</b></h1>";
		echo" <br/>
		<a href = 'EM.html'> <h2 align = 'center'> Go to Home page </h2> </a>";
	}
		else
		{
			echo"Erroe: <br>" .$conn->error;
		}

	$conn->close();
	echo '</body></html>';
	?>
	


