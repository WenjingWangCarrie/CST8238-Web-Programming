
<html>

<head>
<title>All.php</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>

	<?php include "Header.php";?>	

	<?php include "Menu.php";?>
	
	<div class="content">
	<?php
	
	$i = 99;
	while ( $i >= 0 ) {
		
		if ($i == 0) {
			echo "There are no more bottles of beer.<br/>";
			break;
		} else {
			
			echo "$i bottles of beer on the wall...<br/>";
			echo "$i bottles of beer...<br/>";
			echo "You take one down you pass it around...<br/>";
			$i --;
			echo "$i bottles of beer on the wall.<br/>";
			echo "<br />";
		}
	}
	
	?>
	</div>

	<?php include "Footer.php";?>

</body>
</html>