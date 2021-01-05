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
	parse_ini_file() : It returns the configuration list that defined by user.
	*/

	echo "<pre>";
	print_r(parse_ini_file("D:/xampp/php/php.ini", true)); // True keyword provides longer output.
	echo "</pre>";

	?>
</body>
</html>