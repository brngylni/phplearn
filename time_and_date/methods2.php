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

	$TimeStamp 	=	date("U");
	$Time 		=	date("d.m.Y H:i:s", $TimeStamp);

	echo "Time Stamp : " . $Time;




	?>
</body>
</html>