<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>array_count_values()</title>
</head>
<body>
	<?php

	/*

	array_count_values()	:	It is using to find how many times an element has repeated in any array.

	*/

	$Names	=	array("Mehmet", "Baran", "Mehmet", "Mehmet", "Kara", "Geylani", "Kerim", "Ali", "Veli", "Kırkdokuz", "50");

	echo "<pre>";
	print_r($Names);
	echo "</pre>";

	$Process	=	array_count_values($Names);


	echo "<pre>";
	print_r($Process);
	echo "</pre>";


	?>
</body>
</html>