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
	date(format)ate_modify() 	: It is using to add the specified date to new created date object.
	*/
	$time 	=	date_create();

	echo "<pre>";
	print_r($time);
	echo "</pre>";

	date_modify($time, "+3 hour");

	echo "<pre>";
	print_r($time);
	echo "</pre>";

	?>
</body>
</html>