<<?php 
	include "connect.php";
	$MAhmad = "";
	$MUzair = "";
	$NoormahK = "";
	$Asim = "";
	$Asim1 = "";
	$Rafay="";
	$Rafay1="";
	$Sabahat="";
	$Sabahat1="";
	$AhmadT ="";
	$HamzaB = "";
	$Faryal ="";
	$Danial="";
	$Danial1="";
	$Shouzab="";
	$Rida ="";
	$HamzaB2="";
	$Zain ="";
	$Shouzab1="";	

	//---------------------------------------------------------------------------

	$qry ="SELECT * FROM chairperson WHERE Name = 'Muhammad Ahmad Ali'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$MAhmad= $row[$id];
		}	
	echo $MAhmad;
	
	$qry ="SELECT * FROM chairperson WHERE Name = 'Muhammad Uzair'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$MUzair= $row[$id];
		}	
	echo $MUzair;
	$qry ="SELECT * FROM chairperson WHERE Name = 'Noormah Khan'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$NoormahK= $row[$id];
		}	
	echo $NoormahK;

	//--------------------------------------------------------------------------

	$qry ="SELECT * FROM `vice-chairperson` WHERE Name = 'Asim Mahmood'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Asim= $row[$id];
		}

	$qry ="SELECT * FROM `vice-chairperson` WHERE Name = 'Rafay Asim'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Rafay= $row[$id];
		}
	$qry ="SELECT * FROM `vice-chairperson` WHERE Name = 'Sabahat Ijaz'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Sabahat= $row[$id];
		}
	//-----------------------------------------------------------------------------------

	$qry ="SELECT * FROM `assistant vice-chairperson` WHERE Name = 'Asim Mahmood'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Asim1= $row[$id];
		}			
	$qry ="SELECT * FROM `assistant vice-chairperson` WHERE Name = 'Sabahat Ijaz'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Sabahat1= $row[$id];
		}

	//----------------------------------------------------------------------------------

	$qry ="SELECT * FROM `general_secretory_male` WHERE Name = 'Ahmad Tariq'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$AhmadT= $row[$id];
		}

	$qry ="SELECT * FROM `general_secretory_male` WHERE Name = 'Hamza Bukhari'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$HamzaB= $row[$id];
		}

	$qry ="SELECT * FROM `general_secretory_male` WHERE Name = 'Rafay Asim'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Rafay1= $row[$id];
		}	

	//----------------------------------------------------------------------------------

	$qry ="SELECT * FROM `general_secretory_female` WHERE Name = 'Faryal Ishfaq'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Faryal= $row[$id];
		}

	//----------------------------------------------------------------------------------

	$qry ="SELECT * FROM `assistant_gsm` WHERE image = 'Danial Gujjar'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Danial	= $row[$id];
		}		

	
	$qry ="SELECT * FROM `assistant_gsm` WHERE image = 'Shouzab khan'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Shouzab= $row[$id];
		}		
	
	//----------------------------------------------------------------------------------

	$qry ="SELECT * FROM `assistant_general_secretary_female` WHERE Name = 'Rida Fatima'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Rida= $row[$id];
		}

	//----------------------------------------------------------------------------------

	$qry ="SELECT * FROM `treasurer` WHERE Name = 'Hamza Bukhari'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$HamzaB2 = $row[$id];
		}		

	
	$qry ="SELECT * FROM `treasurer` WHERE Name = 'Zain-ul-Ebad'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Zain= $row[$id];
		}		
	//----------------------------------------------------------------------------------

	$qry ="SELECT * FROM `event coordinator` WHERE Name = 'Danial Gujjar'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Danial1 = $row[$id];
		}		

	
	$qry ="SELECT * FROM `event coordinator` WHERE Name = 'Shouzab khan'";
	$id = 'Votes';
	$res = $cont->query($qry);
		while ($row = $res->fetch_assoc()){
			$Shouzab1= $row[$id];
		}					
 ?>


<!<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #165589;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #aad8ff;
  color: black;
}

.topnav a.active {
  background-color: #70adac;
  color: white;
}
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
.btn{
	margin-top:20px;
	padding:10px;
	padding-left:50px;
	padding-right:50px;
	margin-bottom:10px;
}
</style>
</head>
<body style="background-color:#000;">

<div class="topnav">
  <a class="active" href="#home">NUCES-ACM ELECTION 2019</a>
</div>
<form action="Result.php" method="post">

<h1 style="background-color:#fff; margin-top:50px;margin-left:200px;margin-right:200px;border-radius:100px;font-size:30px;font-family:Times New Roman
Georgia;border-bottom:5px solid #c4c4c4;">Chairperson</h1>
	<link rel="stylesheet" type="text/css" href="pricetag.css">
<div class="pricing-table">
  <div class="pricing-item">
    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Ahmed Ali Khan.jpeg">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords"> Muhammad Ahmad Ali</li>
      <li class="keywords"><?php echo $MAhmad; ?></li>
    </ul>
  </div>
  
  <div class="pricing-table pricing-item">

    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Uzair.jpeg">
    </div>
    <ul class="pricing-features">
      <li class="keywords"></li>
      <li class="keywords">Muhammad Uzair</li>
      <li class="keywords"><?php echo $MUzair; ?></li>
    </ul>
  </div>
   <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Noormah  Khan.png">
    </div>
    <ul class="pricing-features">
      <li></li>
      <li class="keywords">Noormah Khan</li>
      <li class="keywords"><?php echo $NoormahK; ?></li>
    </ul>
  </div>

<h1 style="background-color:#fff; margin-top:50px;margin-left:200px;margin-right:200px;border-radius:100px;font-size:30px;font-family:Times New Roman
Georgia;border-bottom:5px solid #c4c4c4;">Vice-Chairperson</h1>
	<link rel="stylesheet" type="text/css" href="pricetag.css">
<div class="pricing-table">
  <div class="pricing-item">
    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Asim.png">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords">Asim Mahmood</li>
      <li class="keywords"><?php echo  $Asim; ?></li>
     
    </ul>
  </div>
  
  <div class="pricing-table pricing-item">

    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Rafay Asim.jpg">
    </div>
    <ul class="pricing-features">
      <li class="keywords"></li>
      <li class="keywords"> Rafay Asim</li>
      <li class="keywords"><?php echo  $Rafay; ?></li>
    </ul>
  </div>
   <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Sabahat.jpg">
    </div>
    <ul class="pricing-features">
      <li></li>
      <li class="keywords">Sabahat Ijaz</li>
      <li class="keywords"><?php echo  $Sabahat; ?></li>
    </ul>
  </div>

<h1 style="background-color:#fff; margin-top:50px;margin-left:200px;margin-right:200px;border-radius:100px;font-size:30px;font-family:Times New Roman
Georgia;border-bottom:5px solid #c4c4c4;">Assistant Vice Chair-person</h1>
	<link rel="stylesheet" type="text/css" href="pricetag.css">
<div class="pricing-table">
  <div class="pricing-item">
    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Asim.png">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords">Asim Mahmood</li>
      <li class="keywords"><?php echo  $Asim1; ?></li>
    </ul>
  </div>
  
  <div class="pricing-table pricing-item">

    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Sabahat.jpg">
    </div>
    <ul class="pricing-features">
      <li class="keywords"></li>
      <li class="keywords">Sabahat Ijaz</li>
       <li class="keywords"><?php echo  $Sabahat1; ?></li>
    </ul>
  </div>
<h1 style="background-color:#fff; margin-top:50px;margin-left:200px;margin-right:200px;border-radius:100px;font-size:30px;font-family:Times New Roman
Georgia;border-bottom:5px solid #c4c4c4;">General Secretary Male</h1>
	<link rel="stylesheet" type="text/css" href="pricetag.css">
<div class="pricing-table">
  <div class="pricing-item">
    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Ahmad Tariq.jpg">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"> </li>
      <li class="keywords"> Ahmad Tariq</li>
      <li class="keywords"><?php echo  $AhmadT; ?></li>
    </ul>
  </div>
  
  <div class="pricing-table pricing-item">

    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Syed Hamza Bukhari.jpg">
    </div>
    <ul class="pricing-features">
      <li class="keywords"></li>
      <li class="keywords">Hamza Bukhari</li>
      <li class="keywords"><?php echo  $HamzaB; ?></li>
    </ul>
  </div>
   <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Rafay Asim.jpg">
    </div>
    <ul class="pricing-features">
      <li></li>
      <li class="keywords">Rafay Asim</li>
      <li class="keywords"><?php echo  $Rafay1; ?></li>
    </ul>
  </div>
<h1 style="background-color:#fff; margin-top:50px;margin-left:200px;margin-right:200px;border-radius:100px;font-size:30px;font-family:Times New Roman
Georgia;border-bottom:5px solid #c4c4c4;">General Secretary Female</h1>
	<link rel="stylesheet" type="text/css" href="pricetag.css">
<div class="pricing-table">
  <div class="pricing-item">
    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Faryal Ishfaq.jpg">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"> </li>
      <li class="keywords">Faryal Ishfaq</li>
       <li class="keywords"><?php echo $Faryal; ?></li>
    </ul>
  </div>

<h1 style="background-color:#fff; margin-top:50px;margin-left:200px;margin-right:200px;border-radius:100px;font-size:30px;font-family:Times New Roman
Georgia;border-bottom:5px solid #c4c4c4;">Assistant General Secretary</h1>
  <link rel="stylesheet" type="text/css" href="pricetag.css">
<div class="pricing-table">
  <div class="pricing-item">
    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Danial Nadeem.jpg">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"> </li>
      <li class="keywords"> Danial Gujjar</li>
       <li class="keywords"><?php echo $Danial; ?></li>
    </ul>
  </div>
   <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Shouzab khan.jpg">
    </div>
    <ul class="pricing-features">
      <li></li>
      <li class="keywords"> Shouzab khan</li>
       <li class="keywords"><?php echo $Shouzab; ?></li>
    </ul>
  </div>
<h1 style="background-color:#fff; margin-top:50px;margin-left:200px;margin-right:200px;border-radius:100px;font-size:30px;font-family:Times New Roman
Georgia;border-bottom:5px solid #c4c4c4;">Assistant General Secretary Female</h1>
	<link rel="stylesheet" type="text/css" href="pricetag.css">
   <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Rida Fatima.jpg">
    </div>
    <ul class="pricing-features">
      <li></li>
      <li class="keywords">Rida Fatima</li>
       <li class="keywords"><?php echo $Rida; ?></li>
    </ul>
  </div>	

<h1 style="background-color:#fff; margin-top:50px;margin-left:200px;margin-right:200px;border-radius:100px;font-size:30px;font-family:Times New Roman
Georgia;border-bottom:5px solid #c4c4c4;">Treasurer</h1>
	<link rel="stylesheet" type="text/css" href="pricetag.css">
<div class="pricing-table">
  <div class="pricing-item">
    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Syed Hamza Bukhari.jpg">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords"> Hamza Bukhari </li>
       <li class="keywords"><?php echo $HamzaB2; ?></li>
    </ul>
  </div>
   <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Zain UL Ebad.jpg">
    </div>
    <ul class="pricing-features">
      <li></li>
      <li class="keywords">Zain-ul-Ebad</li>
       <li class="keywords"><?php echo $Zain; ?></li>
    </ul>
  </div>
<h1 style="background-color:#fff; margin-top:50px;margin-left:200px;margin-right:200px;border-radius:100px;font-size:30px;font-family:Times New Roman
Georgia;border-bottom:5px solid #c4c4c4;">Event Coordinator</h1>
	<link rel="stylesheet" type="text/css" href="pricetag.css">
<div class="pricing-table">
  <div class="pricing-item">
    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Danial Nadeem.jpg">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"> </li>
      <li class="keywords">Danial Gujjar</li>
       <li class="keywords"><?php echo $Danial1; ?></li>
    </ul>
  </div>
   <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="../Picture/Shouzab khan.jpg">
    </div>
    <ul class="pricing-features">
      <li></li>
      <li class="keywords">Shouzab khan</li>
       <li class="keywords"><?php echo $Shouzab1; ?></li>
    </ul>
  </div>
</form>
<footer style="background-color:gray; color:white; padding:10px;">
	<h6 style="padding-bottom:10px;">Copyright © Ahsan Chughtai</h6>
</footer>

<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
</body>
</html>