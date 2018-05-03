<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../manager.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="masterContainer">
		<div class="sideNavBar"> 
			<a class="menu1" href="../InformationPanel/PanelShow.php"> Information Panel </a>
			<a class="menu2" href="#"> Analysis </a>
			<a class="menu3" href="../Create/Create.html"> Create </a>
			<a class="menu4" href="../Update/Update.php"> Update </a>
			<a class="menu5" href="../Delete/Delete.php"> Delete </a>
			<a class="menu6" href="../LogOut/LogOut.php"> Log Out </a>
		</div>
		
		<div class="mainArea">
			<div class="form">
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
    		$stmt = $dbconnect ->prepare('SELECT DAYNAME(DateFrom), TableId, DateFrom FROM booking WHERE Status=1');
    		
    		$stmt->execute();

    		$result = $stmt->get_result();
        	while($row = $result->fetch_assoc()) { 
        		echo " Table number is : ".$row['TableId']." on ".$row['DateFrom']." at ".$row['DAYNAME(DateFrom)']." <br/>";
    		}
    		?>
    		</div>
    	</div>
	</div>
</body>
</html>