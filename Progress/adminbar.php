<?php

 $conn = mysqli_connect("localhost","root","","elms");
 if($conn->connect_error)
 {
 	die("Connection Failed");
 }
 $sql = "SELECT * FROM statistics";
 $result = mysqli_query($conn,$sql);
 $url = 'img10.jpg';
 if($result->num_rows >0)
 {
 	echo("<head> <title> statistics </title>
 		<link rel='stylesheet' href='Bar.css'>

 		    <style type='text/css'>
    	body
		{
			background-image:url('$url');
			bgcolor='white';
		}
				</style> 
				</head>
 		<body bgcolor='white' align = 'center'> <br><br><br><br> <h2>List Of Projects</h2><br><br> <table align = 'center' border = 'border' cellpadding = '10' width = '1000' >
 		<tr bgcolor='black'>
		<th><h3> <b>Project Name</b></h3></th>
		<th><h3> <b>Description</b></h3></th>
		<th><h3> <b>Start date</b></h3></th>
		<th><h3> <b>End date</b></h3></th>
		<th><h3> <b>Worked Days</b></h3></th>
		<th><h3> <b>Progress</b></h3></th>
		<th><h3> <b>Remaining</b></h3></th>
	</tr>
	</body>");
	 $y = 1;
 	while($row = $result->fetch_assoc())
 	{
 		/*if($y%2==0){
 		echo"<tr align = 'center' bgcolor='black'>";}
 		else{
 			echo"<tr align = 'center' >";
 		} */
 		echo"
		<td>".$row["project_name"]."</td>
		<td>".$row["description"]."</td>
		<td>".$row["start"]."</td>
		<td>".$row["endd"]."</td>
		<td>".$row["days"]."</td>
		<td>".$row["progress"]."%</td>
		<td>".$row["remaining"]."%</td>
		</tr>";
		$y=$y+1;
 	}
 	echo("</table></body>");
 }
 else
 {
 	echo("<h1 align = 'center'>No Results Found</h1>");
 }

 ?>