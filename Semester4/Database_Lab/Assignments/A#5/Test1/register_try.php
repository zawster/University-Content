<?php
	include "connection.php";

	
	$roll = $_POST["txtRollNo"];
	$name = $_POST["txtName"];
	$fname = $_POST["txtFName"];
	$gender = $_POST["sGender"];
	$contact = $_POST["txtContact"];
	$address = $_POST["txtAddress"];

	$qry = "INSERT INTO students VALUES('".$roll."','".$name."', '".$fname."', '".$gender."', '".$contact."', '".$address."')";

    
    if ($con->query($qry)) {
		$msg = "Registered Successfully!";
	}
	else
		$msg = "Registeration Error!";


        
	header("Location:index.php?Message=$msg");
    
?>










