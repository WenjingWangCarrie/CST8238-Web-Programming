<!DOCTYPE html>

<html>

<head>
<title>Books.php</title>
<link rel="stylesheet" type="text/css" href="styleSheet.css" />
</head>

<body>

<?php include "Header.php"; ?>
<?php include "Menu.php"; ?>

<?php

session_start ();
$xml = file_get_contents ( "http://www.rejaul.com/CST8238/Lab10/Books.xml" );

echo '<div class="content">';
$xmlDoc = new DOMDocument ();
$xmlDoc->loadXML ( $xml );
$catalog = $xmlDoc->getElementsByTagName ( "catalog" );

echo '<table border="1px">';
echo "<th>Author</th>";
echo "<th>Title</th>";
echo "<th>Genre</th>";
echo "<th>Price</th>";
echo "<th>Publish Date</th>";
echo "<th>Description</th>";

foreach ( $catalog as $cuCat ) {
	foreach ( $cuCat->childNodes as $node ) {
		if ($node->nodeName == "book") {
			echo "<tr>";
			
			foreach ( $node->childNodes as $bookNode ) {
				if ($bookNode->nodeName == "author") {
					echo "<td>";
					echo $bookNode->nodeValue;
					echo "</td>";
				}
				if ($bookNode->nodeName == "title") {
					echo "<td>";
					echo $bookNode->nodeValue;
					echo "</td>";
				}
				if ($bookNode->nodeName == "genre") {
					echo "<td>";
					echo $bookNode->nodeValue;
					echo "</td>";
				}
				if ($bookNode->nodeName == "price") {
					echo "<td>";
					echo $bookNode->nodeValue;
					echo "</td>";
				}
				if ($bookNode->nodeName == "publish_date") {
					echo "<td>";
					echo $bookNode->nodeValue;
					echo "</td>";
				}
				if ($bookNode->nodeName == "description") {
					echo "<td>";
					echo $bookNode->nodeValue;
					echo "</td>";
				}
			}
			echo "</tr>";
		}
	}
}

echo "</table>";

echo "</div>";

?>

</body>

<?php include "Footer.php"; ?>
</html>

