<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title></title>
</head>
<body>
	<?php

	/*
	shuffle()	:	It is using to mix the order of elements in any array.
	*/

	$Names	=	array("Mehmet", "Baran", "Kara", "Geylani", "Kerim", "Ali", "Veli");


	echo "<pre>";
	print_r($Names);
	echo "</pre>";

	shuffle($Names);
	//Key names will be ignored.
	echo "<pre>";
	print_r($Names);
	echo "</pre>";


	?>
</body>
</html>