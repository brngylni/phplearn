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
	date_format() 	: It is using to format a created date object.
	*/

	$time 		=	date_create("2000-04-10");
	date_time_set($time, 15, 22, 31);
	$formatted	=	date_format($time, "d.m.Y H:i:s");

	echo "Original version : <br /><pre>";
	print_r($time);
	echo "</pre><br />Formatted version : <br /><pre>";
	print_r($formatted);
	echo "</pre>";


	?>
</body>
</html>