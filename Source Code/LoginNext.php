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
	    $name=$_POST['userName'];
	    $code=$_POST['passWord'];
	    $stmt = $dbconnect ->prepare('SELECT * FROM Login WHERE UserName = ?  AND PassWord= ? ');
	    $stmt->bind_param('ss', $name, $code ); // 's' specifies the variable type => 'string'
	    
	    $stmt->execute();
    
	    $result = $stmt->get_result();
        if($row = $result->fetch_assoc()) {
            $valued = $row["Type"];
            
            header('Location: manager.php');
            die();
        }
        else {
            echo(" log in unsucccesful");
            header("location: index.html");
            die();
        }
        
	}
	else {
	    echo "Errors bigger than thought";
	}
	
	$dbconnect -> close();
    
	?>
    </body>
    
    
</html>
