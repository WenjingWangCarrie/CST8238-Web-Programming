<!DOCTYPE html>

<?php
session_start ();
function test_input($value) {
	$value = trim ( $value );
	$value = stripslashes ( $value );
	$value = htmlspecialchars ( $value );
	return $value;
}

$host = 'localhost';
$username = 'wenjingw_cst8238';
$password = 'cst@8238';
$database = 'wenjingw_cst8238';

$SESSION ["fname"] = $_SESSION ["lname"] = $_SESSION ["pnum"] = $_SESSION ["sinNum"] = $_SESSION ["pass"] = $_SESSION ["email"] = "";

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	$_SESSION ["fname"] = $fname = test_input ( $_POST ["fname"] );
	$_SESSION ["lname"] = $lname = test_input ( $_POST ["lname"] );
	$_SESSION ["pnum"] = $pnum = test_input ( $_POST ["pnum"] );
	$_SESSION ["sinNum"] = $sinNum = test_input ( $_POST ["sinNum"] );
	$_SESSION ["email"] = $email = test_input ( $_POST ["email"] );
	$_SESSION ["pass"] = $pass = test_input ( $_POST ["pass"] );
	
	$dbConnection = mysqli_connect ( $host, $username, $password, $database );
	
	if ($dbConnection == FALSE) {
		die ( "Connection failed" . mysqli_connect_error () );
	}
	
	$sql = "INSERT INTO Employee (FirstName, LastName, EmailAddress, TeleploneNumber, SocialInsuranceNumber, Password) VALUES ('$fname', '$lname', '$email', '$pnum', '$sinNum', '$pass')";
	$result = mysqli_query ( $dbConnection, $sql );
	
	if ($result == FALSE) {
		die ( "Error " . $sql . "<br/>" . mysqli_error ( $dbConnection ) );
	}
	
	mysqli_close ( $dbConnection );
	
	$_SESSION ["valid_login"];
	header ( 'Location: http://wenjingwang.com/CST8238/Lab9/ViewAllEmployees.php' );
	exit ();
}

?>

<html>

<head>
<title>CreateAccount.php</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>
<?php include "Header.php"; ?>
<?php include "Menu.php"; ?>

	<div class="content">

		<form method="post">
			<fieldset>
				<legend>Create Your New Account:</legend>
				<br /> <br /> <label for="fname">First Name: </label> <input
					type="text" name="fname" /><br /> <br /> <label for="lname">Last
					Name: </label> <input type="text" name="lname" /><br /> <br /> <label
					for="email">Email Address: </label> <input type="email"
					name="email" /><br /> <br /> <label for="pnum">Phone Number: </label>
				<input type="tel" name="pnum" /><br /> <br /> <label for="sinNum">SIN:
				</label> <input type="text" name="sinNum" maxlength="11" /><br /> <br />
				<label for="pass">Password: </label> <input type="password"
					name="pass" /><br /> <br /> <input type="submit" value="Submit" />

			</fieldset>
		</form>

		<p>Please fill the form.</p>

	</div>

</body>

<?php include "Footer.php"; ?>

</html>













