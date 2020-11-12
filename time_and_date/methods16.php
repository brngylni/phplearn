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
	date_create_from_format() 	: It is using to create a new date object according to format that specified.
	*/

	$time 	=	date_create_from_format("d-m-Y","10-04-2000"); // 1. Parameter : CONSTANTS
												   // 2. Parameter : day-month-year
	echo "<pre>";
	print_r($time);
	echo "</pre>";

	?>
</body>
</html>