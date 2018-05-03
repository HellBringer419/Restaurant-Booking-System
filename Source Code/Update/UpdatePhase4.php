<html>
<body>
	<?php
	session_start();
	$hostname = "localhost";
	$username = "OS";
	$password = "OrissaSkill";
	$db = "HotEat";
	
	/* Connection check   */
	$dbconnect=mysqli_connect($hostname,$username,$password,$db);
	
	if ($dbconnect->connect_error) {
        $_SESSION['log'] = " Server Down ";
        header('location: ../index.html');
	    die("Server Down: " . $dbconnect->connect_error);
	}
	
	// Insert data
	if(isset($_POST['submit'])) {
	    $Date=$_POST['date'];
	    $Time=$_POST['time'];
	   
	    $endTime = date('H:i', strtotime('+2 hour', strtotime($Time)));

	    $stmt=$dbconnect->prepare("SELECT TableNo FROM master_restaurant_tables WHERE TableNo NOT IN (SELECT TableId AS TableNo FROM booking WHERE Status=1 AND DateFrom=? AND ( ? BETWEEN TimeFrom AND TimeTill OR ? BETWEEN  TimeFrom AND TimeTill))");

	    $stmt->bind_param('sss', $Date, $Time, $endTime);

		$stmt->execute();
		$result=$stmt->get_result();
			
		

		$i = 0;

	 	while($row = $result->fetch_assoc()){
			$tab[$i] = $row['TableNo'];
			$i++;
		}
			    
    	$_SESSION['updateAvailableTables'] = $tab;
    	$_SESSION['updateFromTime'] = $Time;
    	$_SESSION['updateTillTime'] = $endTime;
    	$_SESSION['updateFromDate'] = $Date;
    	header("Location: UpdatePhase5.php");
	}
	else {
	    echo "Errors bigger than thought";
	}
	
	$dbconnect -> close();
    
	?>
    </body>
    
    
</html>
