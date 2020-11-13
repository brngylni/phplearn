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
	date_diff()	: It is using to calculate the difference between two date objects.
	format() 	: It is using to format the output of date_diff() method.
	*/

	$time1 		=	date_create("2000-04-10");
	$time2 		=	date_create("07-06-2004");
	$difference =	date_diff($time1, $time2);

	echo "<pre>";
	print_r($difference);
	echo "</pre>";

	$format 	=	$difference -> format("%y Year, %m Month and %d Day"); // We can not fetch the total numbers with %days.

	echo $format;

	?>
</body>
</html>