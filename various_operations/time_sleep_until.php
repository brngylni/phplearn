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
	time_sleep_until() : It is using to delay the codes until the specified timestamp.
	*/


	echo date("h:i:s") . "<br />";
	time_sleep_until(time() + 5);
	echo date("h:i:s");

	?>
</body>
</html>