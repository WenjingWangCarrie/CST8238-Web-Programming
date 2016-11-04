
<html>

<head>
<title>DivideByThree.php</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>
		
	<?php include "Header.php";?>	

	<?php include "Menu.php";?>
	
	<div class="content">
	<?php
	
	$i = 99;
	while ( $i > 0 ) {
		
		if ($i % 3 == 0) {
			echo "$i bottles of beer is a multiple of 3...<br/>";
		} else {
			echo "$i bottles of beer is NOT a multiple of 3...<br/>";
		}
		
		$i --;
	}
	
	?>
	</div>
	
	<?php include "Footer.php";?>

</body>

</html>
