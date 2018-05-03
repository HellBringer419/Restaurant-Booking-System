<html>
    <body>
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
	if(isset($_POST['submit'])) {
	    $table=$_POST['tblNo'];
	    
    	$stmt = $dbconnect ->prepare('INSERT INTO booking (Id, TableId, CustomerId, TimeFrom, TimeTill, DateFrom, Reserved, Status) VALUES ( 0, ?, ?, ?, ?, ?, 1, 1) ');
	    $stmt->bind_param('sssss', $table, $_SESSION['updateCId'], $_SESSION['updateFromTime'], $_SESSION['updateTillTime'], $_SESSION['updateFromDate']); // 's' specifies the variable type => 'string'
	    
	    $stmt->execute();
    
	   	// echo $_SESSION['table']." ".$_SESSION['fromTime']." ".$_SESSION['tillTime']." ".$_SESSION['fromDate'];
	   	header('location: ../Manager.php');
   		die();
        
	}
	else {
	    echo "Errors bigger than thought";
	}
	
	$dbconnect -> close();
    
	?>
    </body>
    
    
</html>
