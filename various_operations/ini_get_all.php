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
	ini_get_all() : It is using to fetch the usable and defined configuration list and returns them as an array.It can also return single configurations.
	*/

	echo "<pre>";
	print_r(ini_get_all("mysqli")); // Empty brackets'd return whole config.
	echo "</pre>";

	echo "<pre>";
	print_r(ini_get_all("mysqli", false)); // Shorter output.
	echo "</pre>";
	?>
</body>
</html>