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
	date_timestamp_set() 	: It is using to edit the Unix timestamp value of new created date object. After assigning it , returns it as an array.
	*/

	$time 		=	date_create();
	date_timestamp_set($time, 955314000);
	$timestamp 	=	date_timestamp_get($time);

	echo "Changed value : " . $timestamp . "<br />";
	echo "Date valeue of the assigned time stamp : " . date("d.m.Y H:i:s", $timestamp);


	?>
</body>
</html>