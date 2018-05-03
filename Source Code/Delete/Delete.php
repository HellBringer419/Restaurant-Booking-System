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
			<a class="menu2" href="../Analysis/Analysis.php"> Analysis </a>
			<a class="menu3" href="../Create/Create.html"> Create </a>
			<a class="menu4" href="../Update/Update.php"> Update </a>
			<a class="menu5" href="#"> Delete </a>
			<a class="menu6" href="../LogOut/LogOut.php"> Log Out </a>
		</div>
		
		<div class="mainArea">
			<form method="post" action="DeletePhase2.php" class="form">
				<p>
					Enter Customer Name:
					<input type="text" name="custName" placeholder="Your name goes here" />
				</p>
				<p>
					Enter Phone No. :
					<input type="number" name="phNo" placeholder="Phone number goes here" />
				</p>
				<p>
					Enter Table you were alloted:
					<input type="text" name="tableNo" placeholder="Alloted table number" />
				</p>
				<p>
					Enter Date:
					<input type="date" name="date" />
				</p>
				<input type="submit" name="delete" value="delete" />

			</form>


			
		</div>
	</div>
</body>
</html>