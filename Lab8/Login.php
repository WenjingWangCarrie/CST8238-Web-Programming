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

$invalid_login = False;
$_SESSION ['valid_login'] = False;

$SESSION ["fname"] = $_SESSION ["lname"] = $_SESSION ["pnum"] = $_SESSION ["sinNum"] = $_SESSION ["pass"] = $_SESSION ["email"] = "";

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	$_SESSION ["email"] = $email = test_input ( $_POST ["email"] );
	$_SESSION ["pass"] = $pass = test_input ( $_POST ["pass"] );
	
	$dbConnection = mysqli_connect ( $host, $username, $password, $database );
	
	if ($dbConnection == FALSE) {
		die ( "Connection failed" . mysqli_connect_error () );
	}
	
	$sql = "SELECT * FROM Employee WHERE (EmailAddress = '$email')";
	$result = mysqli_query ( $dbConnection, $sql );
	$row = mysqli_fetch_assoc ( $result );
	
	$count = mysqli_num_rows ( $result );
	
	if ($count == 0) {
		$invalid_login = True;
		// echo "Email or Password is incorrect.";
	} else if ($row ["EmailAddress"] == $email) {
		if (password_verify ( $pass, $row ["Password"] )) {
			$_SESSION ["valid_login"] = True;
			header ( 'Location: http://wenjingwang.com/CST8238/Lab9/ViewAllEmployees.php' );
		} else {
			$invalid_login = True;
			// echo "Email or Password is incorrect.";
		}
	}
	
	mysqli_close ( $dbConnection );
	
	if ($_SESSION ["valid_login"] == True) {
		header ( 'Location: ./ViewAllEmployees.php' );
	}
}

?>

<html>

<head>
<title>Login.php</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>
<?php include "Header.php"; ?>
<?php include "Menu.php"; ?>

	<div class="content">

		<form method="post">
			<fieldset>
				<legend>Login</legend>
				<br /> <label for="email">Your E-mail: </label> <input type="email"
					name="email" /> <br /> <br /> <label for="pass">Password: </label>
				<input type="password" name="pass" /><br /> <br /> <input
					type="submit" value="Login" /><br /> <br />

			</fieldset>
		</form>
	
<?php

if ($invalid_login) {
	echo '<br/>';
	echo 'Invalid Email/Password';
}

echo '<br/>';
echo '<br/>';
echo '<a href="http://wenjingwang.com/CST8238/Lab9/CreateAccount.php"> No account? Create one </a>';

?>

	</div>

</body>

<?php include "Footer.php"; ?>

</html>
