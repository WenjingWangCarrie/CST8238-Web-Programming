<!DOCTYPE html>
<html>
<head>
<title>Array.php</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>

<?php include "Header.php"; ?>
<?php include "Menu.php"; ?>

<div class="content">

<?php
echo "<h2>Output-1</h2>";

$october = array (
		"Monday" => array (
				'1st' => 3,
				'2nd' => 10,
				'3rd' => 17,
				'4th' => 24,
				'5th' => 31 
		),
		"Tuesday" => array (
				'1st' => 4,
				'2nd' => 11,
				'3rd' => 18,
				'4th' => 25 
		),
		"Wednesday" => array (
				'1st' => 5,
				'2nd' => 12,
				'3rd' => 19,
				'4th' => 26 
		),
		"Thursday" => array (
				'1st' => 6,
				'2nd' => 13,
				'3rd' => 20,
				'4th' => 27 
		),
		"Friday" => array (
				'1st' => 7,
				'2nd' => 14,
				'3rd' => 21,
				'4th' => 28 
		),
		"Saturday" => array (
				'1st' => 8,
				'2nd' => 15,
				'3rd' => 22,
				'4th' => 29 
		),
		"Sunday" => array (
				'1st' => 9,
				'2nd' => 16,
				'3rd' => 23,
				'4th' => 30 
		) 
);

print_r ( $october );

echo "<h2>Output-2</h2>";

$keys = array_keys ( $october );
for($i = 0; $i < count ( $october ); $i ++) {
	
	foreach ( $october [$keys [$i]] as $key => $value ) {
		
		echo $value . " is the " . $key . " " . $keys [$i] . " in October. <br/>";
	}
}

echo "<h2>Output-3</h2>";
print_r ( array_reverse ( $october ) );

echo "<h2>Output-4</h2>";
array_multisort ( $october, SORT_DESC );
print_r ( $october );

echo "<h2>Output-5</h2>";
$october ["5th"] = "32";
print_r ( $october );

?>

</div>

<?php include "Footer.php"; ?>

</body>

</html>




