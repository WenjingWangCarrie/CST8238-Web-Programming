<!DOCTYPE>
<html>
<head>
<title>Session1</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>
<?php include "Header.php"; ?>
<?php include "Menu.php"; ?>
        
	<div class="content">
	
	<?php
	
	session_start ();
	
	if (isset ( $_POST ["submit"] )) {
		
		$_SESSION ["firstName"] = $_POST ["firstNameTextBox"];
		$_SESSION ["lastName"] = $_POST ["lastNameTextBox"];
		$_SESSION ["phoneNum"] = $_POST ["phoneNumberTextBox"];
		$_SESSION ["category"] = $_POST ["studentStaffFaculty"];
		$_SESSION ["apps"] = $_POST ["compApplications"];
		
		header ( "Location: http://wenjingwang.com/CST8238/Lab8/Session2.php" );
		exit ();
	}
	
	?>
		<form method="post" action="Session2.php">
			<table>
				<tr>
					<td>First Name: </td>
					<td><input type="text" name="firstNameTextBox" value="" /></td>
				</tr>

				<tr>
					<td>Last Name: </td>
					<td><input type="text" name="lastNameTextBox" value="" /></td>
				</tr>

				<tr>
					<td>Telephone Number:</td>
					<td><input type="text" name="phoneNumberTextBox" value="" /></td>
			    </tr>
				
				<tr>
					<td>Status:</td>
					  <td>
					    <input type="radio" name="studentStaffFaculty" value="Student" />Student <br/>
					    <input type="radio" name="studentStaffFaculty" value="Staff" />Staff <br/>
					    <input type="radio" name="studentStaffFaculty" value="Faculty" />Faculty <br/>
				      </td>
				</tr>

				<tr>
					<td>Games:</td>
					<td><select name="compApplications[]" multiple="multiple">
							<option value="Nothing Selected">Please select...</option>
							<option value="Zelda - Ocarina of Time">Zelda - Ocarina of Time</option>
							<option value="Pong">Pong</option>
							<option value="DoTA 2">Dota 2</option>
							<option value="League of Legends">LoL</option>
				    </select> </td>
				</tr>
				<tr>
					<td><input type="submit" value="Submit Information" /></td>
				</tr>
			</table>
		</form>

	</div>
		 <?php include "Footer.php"; ?> 
	</body>
</html>
