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
	strftime() 		: It is using to format local date and time informations according to specified value then returns it.
	strtotime() 	:	It is using to find Unix time stamp value of text.
	*/

	setlocale(LC_ALL, "turkish.UTF-8");
	$time = strftime("%d %B %Y %T %A"); //String From Time
	echo $time;

	$timestamp 	=	mktime(20, 30, 40, 04, 10, 2000);
	echo "<br />Time stamp : " . $timestamp;
	$time2 = strftime("%d %B %Y %T %A", $timestamp);
	echo "<br />Formatted value of stamp : " . $time2;

	$time4 	=	 date("Y-m-d");

	echo "<br />" . $time4;
	$newtime 	=	strtotime("1 day", strtotime($time4)); // It adds time stamp of 1 day to time stamp of $time4.
	echo "<br />" . $newtime . " and " . date("d.m.Y", $newtime);

	$time5 	=	 strtotime("now"); 	// Current time.
	$time6 	=	 strtotime("+1 month"); 	// Date of 1 month later.
	echo "<br />" . $time5;



	?>
</body>
</html>