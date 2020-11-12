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

	$Timestamp 		=	getdate(mktime(15, 20, 55, 12, 8, 1980)); // Array return usage. 

	echo "<pre>";
	print_r($Timestamp);
	echo "</pre>";


	?>
</body>
</html>