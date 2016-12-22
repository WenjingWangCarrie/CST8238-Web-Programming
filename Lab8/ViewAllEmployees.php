<!DOCTYPE html>

<?php
session_start ();
function test_input($value) {
	$value = trim ( $value );
	$value = stripslashes ( $value );
	$value = htmlspecialchars ( $value );
	return $value;
}

if ($_SESSION ["valid_login"] == False) {
	header ( 'Location: ./Login.php' );
}

$host = 'localhost';
$username = 'wenjingw_cst8238';
$password = 'cst@8238';
$database = 'wenjingw_cst8238';

$dbConnection = mysqli_connect ( $host, $username, $password, $database );

if ($dbConnection == FALSE) {
	die ( "Connection failed" . mysqli_connect_error () );
}

$sql = "SELECT * FROM Employee;";
$result = mysqli_query ( $dbConnection, $sql );

if ($result == FALSE) {
	die ( "Error " . $sql . "<br/>" . mysqli_error ( $dbConnection ) );
}

mysqli_close ( $dbConnection );
?>

<html>

<head>
<title>ViewAllEmployees.php</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>

<?php include "Header.php"; ?>
<?php include "Menu.php"; ?>

	<div class="content">

	<?php
	
	echo "<h1>Session State Data</h1>";
	
	echo 'First Name: ' . $_SESSION ['fname'];
	echo "<br />";
	echo 'Last Name: ' . $_SESSION ['lname'];
	echo "<br />";
	echo 'Email Address: ' . $_SESSION ['email'];
	echo "<br />";
	echo 'Phone Number: ' . $_SESSION ['pnum'];
	echo "<br />";
	echo 'SIN: ' . $_SESSION ['sinNum'];
	echo "<br />";
	echo 'Password: ' . $_SESSION ['pass'];
	echo "<br />";
	
	/*
	 * if (isset ( $_SESSION ["fname"] )) {
	 * echo "<b>First Name: </b>" . $_SESSION ['fname'];
	 * echo "<br />";
	 * } else
	 * echo "First name *** : <br />";
	 *
	 * if (isset ( $_SESSION ["lname"] )) {
	 * echo "<b>Last Name: </b>" . $_SESSION ['lname'];
	 * echo "<br />";
	 * } else
	 * echo "Last name *** : <br />";
	 *
	 * if (isset ( $_SESSION ["email"] )) {
	 * echo "<b>Email Address: </b>" . $_SESSION ['email'];
	 * echo "<br />";
	 * } else
	 * echo "Email Address *** : <br />";
	 *
	 * if (isset ( $_SESSION ["pnum"] )) {
	 * echo "<b>Phone Number: </b>" . $_SESSION ['pnum'];
	 * echo "<br />";
	 * } else
	 * echo "Phone Number *** : <br />";
	 *
	 * if (isset ( $_SESSION ["sinNum"] )) {
	 * echo "<b>SIN: </b>" . $_SESSION ['sinNum'];
	 * echo "<br />";
	 * } else
	 * echo "SIN *** : <br />";
	 *
	 * if (isset ( $_SESSION ["pass"] )) {
	 * echo "<b>Password: </b>" . $_SESSION ['pass'];
	 * echo "<br />";
	 * } else
	 * echo "Password *** : <br />";
	 */
	
	echo "<br/>";
	echo "<br/>";
	
	echo "<h1>Database Data</h1>";
	echo "<table border='1' width=100%>";
	echo "<tr>";
	echo "<th>First Name</th>";
	echo "<th>Last Name</th>";
	echo "<th>Email Address</th>";
	echo "<th>Phone Number</th>";
	echo "<th>SIN</th>";
	echo "<th>Password</th>";
	echo "</tr>";
	
	if (mysqli_num_rows ( $result ) > 0) {
		while ( $row = mysqli_fetch_assoc ( $result ) ) {
			echo "<tr>";
			echo "<td>" . $row ["FirstName"] . "</td>";
			echo "<td>" . $row ["LastName"] . "</td>";
			echo "<td>" . $row ["EmailAddress"] . "</td>";
			echo "<td>" . $row ["TeleploneNumber"] . "</td>";
			echo "<td>" . $row ["SocialInsuranceNumber"] . "</td>";
			echo "<td>" . $row ["Password"] . "</td>";
			echo "</tr>";
		}
	}
	
	echo "</table>";
	
	?>
	
</div>

</body>

<?php include "Footer.php"; ?>

</html>
