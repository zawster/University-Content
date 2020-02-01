<?php  
	include "connection.php";


	$courceID=$_GET ['code'];
	$rollno=$_GET ['roll'];

	$query = "INSERT INTO RegisterCource VALUES('".$courceID."','".$rollno."')";
	
	
	$con->query($query);
	
	header("Location:searching.php");
?>
