<?php
session_start();
$id=$_POST["emp_id"];

$_SESSION["id"] = $id;



  header("Location: dailywork2.php");
  



?>