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
			<p> Information Panel </p>
			<p> Analysis </p>
			<p> Create </p>
			<p> Update </p>
			<p> Delete </p>
			<p> Log Out </p>
		</div>
		<div class="mainArea">
		<form method="post" action="UpdatePhase4.php" class="form">
			<p> Notice: All links have been temporarily blocked, please add relevant details </p>
			<p> Date:
				<input type="date" name="date" value="<?php echo $_SESSION['UpdateDate']; ?>" />
			</p>		
			<p> Time:
				<input type="time" name="time" value="<?php echo $_SESSION['UpdateTime']; ?>" />
			</p>
			<p> No. of people:
				<input type="number" name="numOfPeople" />		
			</p>			
			<input type="submit" name="submit">	
		</form>
		</div>
	</div>
</body>
</html>