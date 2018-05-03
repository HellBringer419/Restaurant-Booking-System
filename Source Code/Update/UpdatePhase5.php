<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../manager.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php
		
	function isExist($num) {
		foreach ( $_SESSION['updateAvailableTables'] as $tabs) {
			if($num == $tabs)
				return true;
			else 
				continue;			
		}

		return false;
	 }
	?>
	<div class="masterContainer">
		<div class="sideNavBar"> 
			<p> Information Panel </p>
			<p> Analysis </p>
			<p> Create </p>
			<p> Update </p>
			<p> Delete </p>
			<p> Log Out </p>
		</div>
		<p> Notice: All links have been temporarily blocked, please add relevant details </p>
		<div class="mainArea">
		<div class="tables">
		<div class="table1">
			<?php 
			if(isExist(1)) {
				echo "<form method='post'  style='text-align: center; float: center' action='UpdatePhase6.php'><input type='submit' name='submit' value='1'/> <input type='text' name='tblNo' style='display: none' value='1'/> </form>";
			}
			else
				echo " ";
			?>
		</div>
		<div class="table2">
			<?php 
			if(isExist(2)) {
				echo "<form method='post'  style='text-align: center; float: center' action='UpdatePhase6.php'><input type='submit' name='submit' value='2'/> <input type='text' name='tblNo' style='display: none' value='2'/> </form>";
			}
			else
				echo " ";
			?>
		</div>
		<div class="table3">
			<?php 
			if(isExist(3)) {
				echo "<form method='post'  style='text-align: center; float: center' action='UpdatePhase6.php'><input type='submit' name='submit' value='3'/> <input type='text' name='tblNo' style='display: none' value='3'/> </form>";
			}
			else
				echo " ";
			?>
		</div>
		<div class="table4">
			<?php 
			if(isExist(4)) {
				echo "<form method='post'  style='text-align: center; float: center' action='UpdatePhase6.php'><input type='submit' name='submit' value='4'/> <input type='text' name='tblNo' style='display: none' value='4'/> </form>";
			}
			else
				echo " ";
			?>
		</div>
		<div class="table5">
			<?php 
			if(isExist(5)) {
				echo "<form method='post'  style='text-align: center; float: center' action='UpdatePhase6.php'><input type='submit' name='submit' value='5'/> <input type='text' name='tblNo' style='display: none' value='5'/> </form>";
			}
			else
				echo " ";
			?>
		</div>
		<div class="table6">
			<?php 
			if(isExist(6)) {
				echo "<form method='post'  style='text-align: center; float: center' action='UpdatePhase6.php'><input type='submit' name='submit' value='6'/> <input type='text' name='tblNo' style='display: none' value='6'/> </form>";
			}
			else
				echo " ";
			?>
		</div>
		<div class="table7">
			<?php 
			if(isExist(7)) {
				echo "<form method='post'  style='text-align: center; float: center' action='UpdatePhase6.php'><input type='submit' name='submit' value='7'/> <input type='text' name='tblNo' style='display: none' value='7'/> </form>";
			}
			else
				echo " ";
			?>
		</div>
		<div class="table8">
			<?php 
			if(isExist(8)) {
				echo "<form method='post'  style='text-align: center; float: center' action='UpdatePhase6.php'><input type='submit' name='submit' value='8'/> <input type='text' name='tblNo' style='display: none' value='8'/> </form>";
			}
			else
				echo " ";
			?>
		</div>
		<div class="table9">
			<?php 
			if(isExist(9)) {
				echo "<form method='post'  style='text-align: center; float: center' action='UpdatePhase6.php'><input type='submit' name='submit' value='9'/> <input type='text' name='tblNo' style='display: none' value='9'/> </form>";
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