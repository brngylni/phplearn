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
	date_time_set()		: It is using to assign a new time to a new created date object.
	*/

	$date 	=	date_create("2000-04-10");

	date_time_set($date, 12,42,12);

	echo "<pre>";
	print_r($date);
	echo "</pre>";

	?>
</body>
</html>