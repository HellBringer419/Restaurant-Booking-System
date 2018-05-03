<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../manager.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		
	function isExist($num) {
		foreach ( $_SESSION['tables'] as $tabs) {
			if($num == $tabs)
				return true;
			else 
				continue;			
		}

		return false;
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
			<div class="tables">
				<div class="table1">
				<?php 
				if(isExist(1)) {
					echo "<p> <form method='post'  style='text-align: center; float: center' action='Phase3.php'><input type='submit' name='submit' value='1'/> <input type='text' name='tblNo' style='display: none' value='1'/> </form> </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table2">
				<?php 
				if(isExist(2)) {
					echo "<p> <form method='post'  style='text-align: center; float: center' action='Phase3.php'><input type='submit' name='submit' value='2'/> <input type='text' name='tblNo' style='display: none' value='2'/> </form> </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table3">
				<?php 
				if(isExist(3)) {
					echo "<p> <form method='post'  style='text-align: center; float: center' action='Phase3.php'><input type='submit' 	name='submit' value='3'/> <input type='text' name='tblNo' style='display: none' value='3'/> </form> </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table4">
				<?php 
				if(isExist(4)) {
					echo "<p> <form method='post'  style='text-align: center; float: center' action='Phase3.php'><input type='submit' name='submit' value='4'/> <input type='text' name='tblNo' style='display: none' value='4'/> </form> </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table5">
				<?php 
				if(isExist(5)) {
					echo "<p> <form method='post'  style='text-align: center; float: center' action='Phase3.php'><input type='submit' 	name='submit' value='5'/> <input type='text' name='tblNo' style='display: none' value='5'/> </form> </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table6">
				<?php 
				if(isExist(6)) {
					echo "<p> <form method='post'  style='text-align: center; float: center' action='Phase3.php'><input type='submit' name='submit' value='6'/> <input type='text' name='tblNo' style='display: none' value='6'/> </form> </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table7">
				<?php 
				if(isExist(7)) {
					echo "<p> <form method='post'  style='text-align: center; float: center' action='Phase3.php'><input type='submit' 	name='submit' value='7'/> <input type='text' name='tblNo' style='display: none' value='7'/> </form> </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table8">
				<?php 
				if(isExist(8)) {
					echo "<p> <form method='post'  style='text-align: center; float: center' action='Phase3.php'><input type='submit' name='submit' value='8'/> <input type='text' name='tblNo' style='display: none' value='8'/> </form> </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table9">
				<?php 
				if(isExist(9)) {
					echo "<p> <form method='post'  style='text-align: center; float: center' action='Phase3.php'><input type='submit' name='submit' value='9'/> <input type='text' name='tblNo' style='display: none' value='9'/> </form> </p>";
				}
				else
					echo " ";
				?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>