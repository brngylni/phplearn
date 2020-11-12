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
	time()			:	It is using to find the Unix time stamp of current time then returns it.
	mktime 			:	It is using to find the Unix time stamp of specified time then returns it.
	microtime 		:	It is using to find the microsecond value of Unix time stamp of current time.
	gettimeofday()	: 	It is using to find The Unix time stamp, microseconds, summer time application and GMT West  values of current time and returns these as an array.Also it can return as a string if requested.
	*/

	$Timestamp 		=	time(); // we could use date("U"). But recomended using is that.
	$Timestamp2		=	mktime(); // Difference is between these two is , with mktime we  can also find the timestamp of specified time.

	$Timestamp3 	= mktime(15, 20, 55, 2, 12, 1980); 
	echo "Current time stamp is : " . $Timestamp . " = " . $Timestamp2;

	$Time 	=	date("d.m.Y H:i:s", $Timestamp3);

	echo "<br />Time stamp of " . $Time . " is = " . $Timestamp3;



	?>
</body>
</html>