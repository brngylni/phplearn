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
	time_nanosleep() : Same as sleep but just the specified time is nano seconds.
	*/

	echo date("h:i:s") . "<br />";
	time_nanosleep(4, 3123123);
	echo date("h:i:s");


	?>
</body>
</html>