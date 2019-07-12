<?php
session_start();
$servername='localhost';
$username='root';
$password='';
$dbname = "test";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

     $z=$_SESSION["id"];
	 $cp = $_POST['Project'];
	 $leader = $_POST['leader'];
	 $workAssigned = $_POST['workAssigned'];
	 $completedTasks = $_POST['completedTasks'];
	 $remainingTasks = $_POST['remainingTasks'];
	date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d H:i:s');
	

	 
	 /*sql query for inserting data into database*/
	 $x = "INSERT INTO worksubmission VALUES('$z','$cp','$leader','$workAssigned','$completedTasks','$remainingTasks','$date')";
	 if($conn->query($x)==TRUE)
	 {
	 	header("Location: dailywork3.html");
	 	exit();
	 }
?>