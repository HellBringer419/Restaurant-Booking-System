<html>
<head>
	<link rel="stylesheet" type="text/css" href="../manager.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="7; URL=PanelShow.php">
	<?php
	session_start();
	$hostname = "localhost";
	$username = "OS";
	$password = "OrissaSkill";
	$db = "HotEat";
	
	/* Connection check */
	$dbconnect=mysqli_connect($hostname,$username,$password,$db);
	
	if ($dbconnect->connect_error) {
        $_SESSION['log'] = " Server Down ";
        header('location: ../index.html');
	    die("Server Down: " . $dbconnect->connect_error);
	}
	
	// Insert data
	date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d');
	$time = date('H:i:s');


    $stmt=$dbconnect->prepare("SELECT TableNo FROM master_restaurant_tables WHERE TableNo NOT IN (SELECT TableId AS TableNo FROM booking WHERE 	Status=1 AND DateFrom=? AND ( ? BETWEEN TimeFrom AND TimeTill ))");

    $stmt->bind_param('ss', $date, $time);

	$stmt->execute();
	$result=$stmt->get_result();
			
		

	$i = 0;

 	while($row = $result->fetch_assoc()){
		$tab[$i] = $row['TableNo'];
		// echo $tab[$i];
		$i++;
	}
			    
	$_SESSION['vacancy'] = $tab;
	?>

	<?php
	function isExist($num) {
		foreach ( $_SESSION['vacancy'] as $tabs) {
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
			<a class="menu1" href="#"> Information Panel </a>
			<a class="menu2" href="../Analysis/Analysis.php"> Analysis </a>
			<a class="menu3" href="../Create/Create.html"> Create </a>
			<a class="menu4" href="../Update/Update.php"> Update </a>
			<a class="menu5" href="../Delete/Delete.php"> Delete </a>
			<a class="menu6" href="../LogOut/LogOut.php"> Log Out </a>
		</div>
		<div class="mainArea">
			<div class="tables">
				<div class="table1">
				<?php 
				if(isExist(1)) {
					echo "<p> 1 </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table2">
				<?php 
				if(isExist(2)) {
					echo "<p> 2 </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table3">
				<?php 
				if(isExist(3)) {
					echo "<p> 3 </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table4">
				<?php 
				if(isExist(4)) {
					echo "<p> 4 </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table5">
				<?php 
				if(isExist(5)) {
					echo "<p> 5 </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table6">
				<?php 
				if(isExist(6)) {
					echo "<p> 6 </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table7">
				<?php 
				if(isExist(7)) {
					echo "<p> 7 </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table8">
				<?php 
				if(isExist(8)) {
					echo "<p> 8 </p>";
				}
				else
					echo " ";
				?>
				</div>
				<div class="table9">
				<?php 
				if(isExist(9)) {
					echo "<p> 9 </p>";
				}
				else
					echo " ";
				?>
				</div>
			</div>
		</div>
	</div>
</html>

</body>

