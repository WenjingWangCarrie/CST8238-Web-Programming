
<html>

<head>
<title>EvenOdd.php</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>

	<?php include "Header.php";?>
	
	<?php include "Menu.php";?>
	
	<div class="content">
	<?php
	
	$i = 99;
	$j = 0;
	while ( ($i >= 0) || ($j < 99) ) {
		
		if ($i == 0) {
			echo "0 bottles of beer on the wall.<br/>";
			echo "There are no more bottles of beer.";
		} elseif ($i % 2 != 0) {
			echo "$i bottles of beer can serve odd number of guests...<br/>";
		} else {
			echo "$i bottles of beer can serve even number of guests...<br/>";
		}
		
		$j ++;
		echo "You take $j down from 99...<br/>";
		$i = 99 - $j;
	}
	
	?>
	</div>
	
	<?php include "Footer.php";?>

</body>

</html>
