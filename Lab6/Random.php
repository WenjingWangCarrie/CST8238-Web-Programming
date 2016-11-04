
<html>

<head>
<title>Random.php</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>

	<?php include "Header.php";?>	

	<?php include "Menu.php";?>

	<div class="content">
		<form method="post" action="generate.php">
			Range 1: <input type="number" name="range1"><br /> 
			Range 2: <input type="number" name="range2"><br /> 
			<input type="submit" value="Order" />		
		</form>	
	
	</div>
	
	<?php include "Footer.php";?>

</body>
</html>