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
	date_default_timezone_set() 	:	It is using to specify the default current timezone that using from all time and date operations.
		
		UTC 	:	Coordinated Universal Time
		GMT 	:	Greenwich Mean Time



	*/

		date_default_timezone_set("America/New_York");
		$Time 	= 	date_default_timezone_get();

		echo $Time;
		date_default_timezone_set("Europe/Istanbul");
	?>
</body>
</html>