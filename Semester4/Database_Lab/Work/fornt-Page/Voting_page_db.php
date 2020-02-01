<?php 
	include "connect.php";
	session_start();
	$adding =0;
	$acm_id = $_SESSION['acm_id'];
	echo $acm_id;
	$chairperson = $_POST["Cp"];
	echo $chairperson;
	$V_ch_person = $_POST["VCp"];
	echo $V_ch_person;
	$AV_ch_person = $_POST["AVCP"];
	echo $AV_ch_person;
	$Gen_Sec_male = $_POST["GSM"];
	echo $Gen_Sec_male;
	$Gen_Sec_Female = $_POST["GMF"];
	echo $Gen_Sec_Female;
	$A_Gen_Sec_male = $_POST["AGSM"];
	echo $A_Gen_Sec_male;
	$A_Gen_Sec_Female = $_POST["AGSF"];
	echo $A_Gen_Sec_Female;
	$Tre_male = $_POST["Tre"];
	echo $Tre_male;
	$Ent_Coor = $_POST["EC"];
	echo $Ent_Coor;

	$qry ="SELECT * FROM `chairperson` WHERE Name = '".$chairperson."'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$adding = $row[$id] +1;
		}	
	echo $adding;

	$qry1 ="UPDATE `chairperson` SET `Votes`=".$adding. " WHERE Name = '".$chairperson."'";
	$res = $cont->query($qry1);

	// =--------------------------------------------------------------------------------------=//

	$qry ="SELECT * FROM `vice-chairperson` WHERE Name = '".$V_ch_person."'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$adding = $row[$id] +1;
		}	
	echo $adding;
	$qry1 ="UPDATE `vice-chairperson` SET `Votes`=".$adding. " WHERE Name = '".$V_ch_person."'";
	$res = $cont->query($qry1);

	// =--------------------------------------------------------------------------------------=//

	$qry ="SELECT * FROM `assistant vice-chairperson` WHERE Name = '".$AV_ch_person."'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$adding = $row[$id] +1;
		}	
	echo $adding;
	$qry1 ="UPDATE `assistant vice-chairperson` SET `Votes`=".$adding. " WHERE Name = '".$AV_ch_person."'";
	$res = $cont->query($qry1);

	// =--------------------------------------------------------------------------------------=//

	$qry ="SELECT * FROM `general_secretory_male` WHERE Name = '".$Gen_Sec_male."'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$adding = $row[$id] +1;
		}	
	echo $adding;
	echo "Hello World";
	$qry1 ="UPDATE `general_secretory_male` SET `Votes`=".$adding. " WHERE Name = '".$Gen_Sec_male."'";
	$res = $cont->query($qry1);

	// =--------------------------------------------------------------------------------------=//

	$qry ="SELECT * FROM `general_secretory_female` WHERE Name = '".$Gen_Sec_Female."'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$adding = $row[$id] +1;
		}	
	echo $adding;
	$qry1 ="UPDATE `general_secretory_female` SET `Votes`=".$adding. " WHERE Name = '".$Gen_Sec_Female."'";
	$res = $cont->query($qry1);

	// =--------------------------------------------------------------------------------------=//e

	$qry ="SELECT * FROM `assistant_general_secretary_female` WHERE Name = '".$A_Gen_Sec_Female."'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$adding = $row[$id] +1;
		}	
	echo $adding;
	$qry1 ="UPDATE `assistant_general_secretary_female` SET `Votes`=".$adding. " WHERE Name = '".$A_Gen_Sec_Female."'";
	$res = $cont->query($qry1);


	// =--------------------------------------------------------------------------------------=//e

	$qry ="SELECT * FROM `treasurer` WHERE Name = '".$Tre_male."'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$adding = $row[$id] +1;
		}	
	echo $adding;
	$qry1 ="UPDATE `treasurer` SET `Votes`=".$adding. " WHERE Name = '".$Tre_male."'";
	$res = $cont->query($qry1);

		// =--------------------------------------------------------------------------------------=//e

	$qry ="SELECT * FROM `event coordinator` WHERE Name = '".$Ent_Coor."'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$adding = $row[$id] +1;
		}	
	echo $adding;
	$qry1 ="UPDATE `event coordinator` SET `Votes`=".$adding. " WHERE Name = '".$Ent_Coor."'";
	$res = $cont->query($qry1);


	// =--------------------------------------------------------------------------------------=//e
	echo $A_Gen_Sec_male;

	$qry ="SELECT * FROM `assistant_gsm` WHERE image = '".$A_Gen_Sec_male."'";
	echo $qry;
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$adding = $row[$id] +1;
		}	
	echo $adding;
	$qry1 ="UPDATE `assistant_gsm` SET `Votes`=".$adding. " WHERE image = '".$A_Gen_Sec_male."'";
	$res = $cont->query($qry1);


	$qry = "INSERT INTO `members`(`id_acm`, `NameCandidate`) VALUES ('".$acm_id."','".$chairperson."')";
	$cont->query($qry);
	$qry = "INSERT INTO `members`(`id_acm`, `NameCandidate`) VALUES ('".$acm_id."','".$V_ch_person."')";
	$cont->query($qry);
	$qry = "INSERT INTO `members`(`id_acm`, `NameCandidate`) VALUES ('".$acm_id."','".$AV_ch_person."')";
	$cont->query($qry);
	$qry = "INSERT INTO `members`(`id_acm`, `NameCandidate`) VALUES ('".$acm_id."','".$Gen_Sec_male."')";
	$cont->query($qry);
	$qry = "INSERT INTO `members`(`id_acm`, `NameCandidate`) VALUES ('".$acm_id."','".$Gen_Sec_Female."')";
	$cont->query($qry);
	$qry = "INSERT INTO `members`(`id_acm`, `NameCandidate`) VALUES ('".$acm_id."','".$A_Gen_Sec_male."')";
	$cont->query($qry);
	$qry = "INSERT INTO `members`(`id_acm`, `NameCandidate`) VALUES ('".$acm_id."','".$A_Gen_Sec_Female."')";
	$cont->query($qry);
	$qry = "INSERT INTO `members`(`id_acm`, `NameCandidate`) VALUES ('".$acm_id."','".$Tre_male."')";
	$cont->query($qry);
	$qry = "INSERT INTO `members`(`id_acm`, `NameCandidate`) VALUES ('".$acm_id."','".$Ent_Coor."')";
	$cont->query($qry);

	header("Location:index.php?Message=$msg");
 ?>