<!DOCTYPE>
<html>
<head>
<title>Input.php</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>
    <?php include "Header.php"; ?>
    <?php include "Menu.php"; ?>
           
    <div class="content">
        <div class="left">

		<form method="post">

			<table>
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="txtboxFirstName"></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="txtboxLastName"></td>
				</tr>
				<tr>
					<td>Telephone Number:</td>
					<td><input type="text" name="txtboxTelephoneNumber"></td>
				</tr>
				<tr>
					<td>Status:</td>
					<td><input type="radio" name="radioStudentFacultyGroup"
						value="Student">Student<br /> <input type="radio"
						name="radioStudentFacultyGroup" value="Staff">Staff<br /> <input
						type="radio" name="radioStudentFacultyGroup" value="Staff">Faculty<br />
					</td>
				</tr>
				<tr>
					<td>Games:</td>
					<td><select name="selectVideoGame">
							<option value="Nothing Selected">Please select...</option>
							<option value="Zelda - Ocarina of Time">Zelda - Ocarina of Time</option>
							<option value="Pong">Pong</option>
							<option value="DoTA 2">Dota 2</option>
							<option value="League of Legends">LoL</option>
					</select></td>
				</tr>
				<tr>
					<td><input type="submit" value="Submit Information"></td>
				</tr>
			</table>
		</form>
		</div>
		
		<?php
		
		if (isset ( $_POST ["txtboxFirstName"] ))
			$firstName = $_POST ["txtboxFirstName"];
		else
			$firstName = "";
		
		if (isset ( $_POST ["txtboxLastName"] ))
			$lastName = $_POST ["txtboxLastName"];
		else
			$lastName = "";
		
		if (isset ( $_POST ["txtboxTelephoneNumber"] ))
			$telephoneNumber = $_POST ["txtboxTelephoneNumber"];
		else
			$telephoneNumber = "";
		
		if (isset ( $_POST ["radioStudentFacultyGroup"] ))
			$studentStaffFaculty = $_POST ["radioStudentFacultyGroup"];
		else
			$studentStaffFaculty = "";
		
		if (isset ( $_POST ["selectVideoGame"] ))
			$videoGame = $_POST ["selectVideoGame"];
		else
			$videoGame = "";
		?>
		
		<div class="right">
		<?php 
		echo "<table>";
		echo "<tr><td>First Name: " . $firstName . "</td></tr><br/>";
		echo "<tr><td>Last Name: " . $lastName . "</td></tr><br/>";
		echo "<tr><td>Telephone Number: " . $telephoneNumber . "</td></tr><br/>";
		echo "<tr><td>Status: " . $studentStaffFaculty . "</td></tr><br/>";
		echo "<tr><td>Games: " . $videoGame . "</td></tr><br/>";
		echo "</table>";
		?>
		</div>
		
	</div>

	<?php include "Footer.php"; ?>

</body>
</html>