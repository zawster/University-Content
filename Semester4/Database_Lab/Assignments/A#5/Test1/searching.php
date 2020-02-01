<?php
	include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Record</title>
</head>
<body>
	<form action="" method="post">
		<table align="center">
			<th colspan="2">Searching Student</th>
			<tr>
				<td>
					Roll No
				</td>
				<td>
					<input type="text" name="txtRNo" required>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" value="Search">
				</td>
			</tr>
		</table>
	</form>
	<?php
		if (isset($_POST["txtRNo"])) {
			$rollno = $_POST["txtRNo"];
			$qry = "SELECT * FROM students WHERE roll_no = '".$rollno."'";
			$qry1 = "SELECT * FROM cources,RegisterCource WHERE roll_no ='".$rollno."' AND cources.code = RegisterCource.code;";
			$qry2 = "SELECT * FROM cources  WHERE code != ALL(SELECT code FROM RegisterCource Where roll_no = '".$rollno."');";

			$res = $con->query($qry);
			$res1 = $con->query($qry1);
			$res2 = $con->query($qry2);
			



			$result = "";

			if ($res->num_rows>0) {
				$result .= "<table align='center' border=1px>";
				$result .= "<th>Roll No</th><th>Name</th><th>Father's Name</th><th>Gender</th><th>Contact No</th><th>Address</th>";
				while ($row = $res->fetch_assoc()) 
				{
					$result .= "<tr>
									<td>
										".$row['roll_no']."
									</td>
									<td>
										".$row['st_name']."
									</td>
									<td>
										".$row['f_name']."
									</td>
									<td>
										".$row['gender']."
									</td>
									<td>
										".$row['contact']."
									</td>
									<td>
										".$row['address']."
									</td>
								</tr>";
				}
				$result .= "</table>";
			
///////////////////////////////////////////////////////////////////////////////////////////////////////////
			$result1="";
				
				$result1 .= "<div><h2 align='center'> Cources Register</h2><table align='center'  border=1px>";
				$result1 .= "<th>Cource ID</th><th>Cource Name</th><th>Credits</th>";
					if ($res1->num_rows>0) {
					while ($row1 = $res1->fetch_assoc()) 
					{
					//one row
						$result1 .= "<tr>
									<td>
										".$row1['code']."
									</td>
									<td>
										".$row1['cource_name']."
									</td>
									<td>
										".$row1['credits']."
									</td>
			
									
								</tr>";
					}
					$result1 .= "</table><hr></div>";
				}
				else{
					$result1 = "<div><h1 align='center'> Cources Register</h1><br><h3 align='center'>There is No Registeration</h3></div>";
				}
///////////////////////////////////////////////////////////
				$result2="";
				
				$result2 .= "<div><h2 align='center'> Cources Available</h2><table align='center'  border=1px>";
				$result2 .= "<th>Cource Code</th><th>Cource Name</th><th>Credits</th><th>Option</th>";
					if ($res2->num_rows>0) {
					while ($row1 = $res2->fetch_assoc()) 
					{
					//one row
						$result2 .= "<tr>
									<td>
										".$row1['code']."
									</td>
									<td>
										".$row1['cource_name']."
									</td>
									<td>
										".$row1['credits']."
									</td>
									<td>
										".'<a href="./registration.php?code='.$row1['code'].'&roll='.$rollno.'"><input type="button" name="code" value="Enroll"></a>'."
									</td>
									
								</tr>";
					}
					$result2 .= "</table><hr></div>";
				}
				


			}
			else{
				$result .= "<div align="."center"."> <h2>"." No Record  Found."."</h2></div>";
			}
				
				
			$result.=$result1;
			$result.=$result2;
			echo $result;
		}
	?>
</body>
</html>
