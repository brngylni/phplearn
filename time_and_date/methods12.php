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
		date_date_set() 	: It is using to assign the specified new date to a new created date object.
	*/

		$date 	=	date_create();
		date_date_set($date, 2000, 04, 10);

		echo "<pre>";
		print_r($date);
		echo "</pre>";


	?>
</body>
</html>