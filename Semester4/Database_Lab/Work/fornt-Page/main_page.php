<?php 	
		include "connect.php";
		session_start(); // It is for Starting the Session
		$_SESSION['acm_id'] = htmlentities($_POST['acm_id']);
	   $acm_id = $_POST["acm_id"];
		$qry	= "select * from `acm_members` where `Id` = '".$acm_id."'";
		$res = $cont->query($qry);
		if ($res->num_rows == 1) {
			// $qry ="DELETE FROM `acm_members` WHERE Id ='".$acm_id."'";
			// $res = $cont->query($qry);
			header("Location:voting_page.php?Message=$msg");
		}
		else
			header("Location:index.php?Message=$msg");
			$message = "Your Acm-Id is incorrect.\\nTry again.";
 			echo "<script type='text/javascript'>alert('$message');</script>";
 			

		
 ?>