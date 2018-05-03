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
	if(isset($_POST['delete'])) {
	    $name=$_POST['custName'];
	    $code=$_POST['phNo'];
	    $table=$_POST['tableNo'];
	    $date=$_POST['date'];
	    $stmt = $dbconnect ->prepare('SELECT Id FROM customer WHERE Name = ?  AND PhoneNo = ? ');
	    $stmt->bind_param('ss', $name, $code ); // 's' specifies the variable type => 'string'
	    
	    $stmt->execute();
    
	    $result = $stmt->get_result();
        if($row = $result->fetch_assoc()) {
        	$id = $row['Id'];
        }

        $query2 = $dbconnect->prepare('UPDATE booking SET Status = 0 WHERE CustomerId =? AND TableId =? AND DateFrom =?');
        $query2->bind_param('sss', $id, $table, $date);
        $query2->execute();
        header('location: ../Manager.php');
    }
    else {
    	echo "Errors bigger than thought";
    }
    ?>
</body>
</html>