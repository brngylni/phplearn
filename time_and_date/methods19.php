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
	date_add() 	: It is using to add a date value to date object.It adds with including date_intervar_create_from_string() method.
	*/

	$time 	=	date_create("2000-04-10");

	date_add($time, date_interval_create_from_date_string("-2 years"));
	echo "<pre>";
	print_r($time);
	echo "</pre>";



	?>
</body>
</html>