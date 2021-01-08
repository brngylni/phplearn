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
	usleep() : Same as sleep but just the specified time is micro seconds.
	*/

	echo date("h:i:s") . "<br />";
	usleep(5000000); // 5 million micro seconds equals to 5 seconds.
	echo date("h:i:s");

	?>
</body>
</html>