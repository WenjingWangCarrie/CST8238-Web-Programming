<!DOCTYPE>
<html>
<head>
<title>Session2</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>
		
		<?php include "Header.php"; ?>
		<?php include "Menu.php"; ?>

		<div class="content">
		
		<?php
		
		session_start ();
		
		$_SESSION ['firstName'] = $_POST ['firstNameTextBox'];
		$_SESSION ['lastName'] = $_POST ['lastNameTextBox'];
		$_SESSION ['phoneNum'] = $_POST ['phoneNumberTextBox'];
		$_SESSION ["category"] = $_POST ["studentStaffFaculty"];
		
		if (isset ( $_SESSION ["firstName"] )) {
			echo "<b>First Name: </b>" . $_SESSION ['firstName'];
			echo "<br />";
		} else
			echo "First name is: <br />";
		
		if (isset ( $_SESSION ["lastName"] )) {
			echo "<b>Last Name: </b>" . $_SESSION ['lastName'];
			echo "<br />";
		} else
			echo "Last name is: <br />";
		
		if (isset ( $_SESSION ["phoneNum"] )) {
			echo "<b>Telephone Number: </b>" . $_SESSION ['phoneNum'];
			echo "<br />";
		} else
			echo "Phone Number is: <br />";
			
		if (isset ( $_POST ["studentStaffFaculty"] )) {
			echo "<b>Status: </b>" . $_SESSION ['category'];
			echo "<br />";
		} 
			
		if (isset ( $_POST ["compApplications"] )) {
			$apps = $_POST ["compApplications"];
			$nApps = count ( $apps );
			for($i = 0; $i < $nApps; ++ $i) {
				$_SESSION ["pickedApps"] .= $apps [$i];
				echo $pickedApps;
			}
			echo "<b>Games: </b>" . $_SESSION ['pickedApps'];
			echo "<br />";
		} 
		
		?>
		 </div>
		
		 <?php include "Footer.php"; ?>  
	</body>
</html>
