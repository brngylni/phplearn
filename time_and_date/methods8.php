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

	$time_stamp 	=	microtime();

	echo "Microseconds / Time Stamp : " . $time_stamp . "<br />";	

	$array 	=	explode(" ", $time_stamp);

	$time 			=	$array[1];
	$microseconds 	=	$array[0];

	echo "Time is : " . $time . " and microseconds time stamp is : " . $microseconds;

	?>
</body>
</html>