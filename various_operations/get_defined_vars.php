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
	get_defined_vars() : It finds the list of whole variables in PHP and defined by user then returns those as an array.
	*/

	$name = "Mehmet";
	$surname = "Geylani";
	$colors = array("black", "blue", "white");
	setcookie("info", "PHP");

	echo "<pre>";
	print_r(get_defined_vars());
	echo "</pre>";


	?>
</body>
</html>