<?php
	//php code here
	$cont = new Mysqli ("localhost","root","","acm_election_2019");

	if ($cont->connect_error) 
		echo "Error: ".$con->connect_error;
?>