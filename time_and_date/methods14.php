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
	date_timestamp_get() 	: It is using to return the Unix timestamp value of new created date object.
	*/

	$time 		=	date_create("2000-04-10");
	$timestamp 	=	date_timestamp_get($time);


	echo "Time stamp value of the created date object : " . $timestamp . "<br />";

	echo "Time value of that : " . date("d.m.Y H.i.s" , $timestamp);



	?>
</body>
</html>