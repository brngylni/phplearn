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
	date_default_timezone_get() 	: It is using to find the default current timezone that using from every date and time operations.
	*/

	$Time 	= date_default_timezone_get();	// Default Europe/Berlin on xampp

	echo $Time;


	?>
</body>
</html>