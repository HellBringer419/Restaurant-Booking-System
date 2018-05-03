<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../manager.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script type="text/javascript">
		function logsOut() {
			var check = confirm('Are you sure you want to logout');
			if(check == true) {
				window.location.replace("LogOutNext.php");
			}
			else {
				window.location.replace("../Manager.php");	
			}
		}
	</script>
</head>
<body onload="logsOut()">
	<div class="masterContainer">
		<div class="sideNavBar"> 
			<a class="menu1" href="../InformationPanel/PanelShow.php"> Information Panel </a>
			<a class="menu2" href="../Analysis/Analysis.php"> Analysis </a>
			<a class="menu3" href="../Create/Create.html"> Create </a>
			<a class="menu4" href="../Update/Update.php"> Update </a>
			<a class="menu5" href="../Delete/Delete.php"> Delete </a>
			<a class="menu6" href="#"> Log Out </a>
		</div>
		<div class="mainArea">
			<div class="form">
				<p>You are about to log out !!</p>
			</div>
		</div>
		
	</div>
</body>
</html>