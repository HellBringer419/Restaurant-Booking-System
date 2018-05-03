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
	if(isset($_POST['checked'])) {
	    $theName=$_POST['customerName'];
	    $theLocation=$_POST['location'];
	    $thePhNo=$_POST['phNo'];

	    $query2 = $dbconnect -> prepare('SELECT Id FROM customer WHERE Name = ? AND PhoneNo = ?');
	    $query2 -> bind_param('ss', $theName, $thePhNo);
	    $query2 -> execute();

	    $result2 = $query2->get_result();
	    if($result2->num_rows == 0) {

	    	$query1 = $dbconnect -> prepare('INSERT INTO customer (Id, Name, Location, PhoneNo) VALUES (0, ?, ?, ?) ');
	    	$query1 -> bind_param('sss', $theName, $theLocation, $thePhNo);
	    	$query1 -> execute();

	    	$custId = $query1->insert_id;
	    }
	    else {
	    	if($row=$result2->fetch_assoc()) {
	    		$custId = $row['Id'];
	    	}
	    }
    
    	$stmt = $dbconnect ->prepare('INSERT INTO booking (Id, TableId, CustomerId, TimeFrom, TimeTill, DateFrom, Reserved, Status) VALUES ( 0, ?, ?, ?, ?, ?, 1, 1) ');
	    $stmt->bind_param('sssss', $_SESSION['table'], $custId, $_SESSION['fromTime'], $_SESSION['tillTime'], $_SESSION['fromDate']); // 's' specifies the variable type => 'string'
	    
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
