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
	date() 			: 	It is using to find the date and time informations and edit them.
	checkdate() 	:	It is using to find the specified time's identification according to Gregorian Calendar and yield a boolean value.
	*/

	setlocale(LC_ALL, "tr_TR");

	$Time 	=	date("d.m.Y l H:i:s"); // It prints the current date and time xx.xx.xx xx:xx

	echo "Date and time :" . $Time;



	?>
</body>
</html>