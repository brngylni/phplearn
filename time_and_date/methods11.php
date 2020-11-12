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
	date_create() 		: It is using to create a new date object array according to the specified date values then returns it.
	*/

	$date 	=	date_create(); // Year-Month-Day

	echo "<pre>";
	print_r($date);
	echo "</pre><br />";

	$date2 	=	date_create("2000-04-10");

	echo "<pre>";
	print_r($date2);
	echo "</pre><br />";


	?>
</body>
</html>