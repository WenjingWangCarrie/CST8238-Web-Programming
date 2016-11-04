<html>
<body>

	<?php
	
	$number = rand ( $_POST["range1"], $_POST["range2"] );
	
	echo "The Web Server has selected the random number $number from the range 1 to 99.";
	echo "<br/>";
	if ($number % 2 != 0) {
		echo "$number Bottles of Beer can serve odd number of guests.";
	} else {
		echo "$number Bottles of Beer can serve even number of guests.";
	}
	
	?>
	
	</body>
</html>