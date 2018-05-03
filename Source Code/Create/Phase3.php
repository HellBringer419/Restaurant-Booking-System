<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../manager.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	session_start();
	if(isset($_POST['submit'])) {
	    $table=$_POST['tblNo'];
		$_SESSION['table'] = $table;
	}
	?>
</head>
<body>
	<div class="masterContainer">
		<div class="sideNavBar"> 
			<a class="menu1" href="../InformationPanel/PanelShow.php"> Information Panel </a>
			<a class="menu2" href="../Analysis/Analysis.php"> Analysis </a>
			<a class="menu3" href="#"> Create </a>
			<a class="menu4" href="../Update/Update.php"> Update </a>
			<a class="menu5" href="../Delete/Delete.php"> Delete </a>
			<a class="menu6" href="../LogOut/LogOut.php"> Log Out </a>
		</div>

		<div class="mainArea">
		<form method="post" action="Phase4.php" id="custForm" class="form">
		<p> Enter Name:
			<input type="text" name="customerName" />
		</p>
		<!-- <p> Location:
			<input type="text" name="location" />
		</p>
		 -->
		 <p> Location:
			<textarea id="custForm" name="location"></textarea>
		</p>
		<p> Phone No:
			<input type="number" name="phNo" />
		</p>
			<input type="submit" value="submit" name="checked" />
		</form>
		</div>
	</div>
</body>
</html>