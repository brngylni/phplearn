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
	timezone_identifiers_list() 	:	It is using to create an array from all timezone definer values.
	
	1 		:	Africa
	2 		:	America
	4 		:	Antartica
	8 		:	Artctic
	16 		:	Asia
	32 		:	Atlantic
	64 		:	Australia
	128 	:	Europe
	256 	:	İndia
	512 	:	Pacific 
	2047 	:	All 
	*/

	$Time 	=	timezone_identifiers_list();

	echo "<pre>";
	print_r($Time);
	echo "</pre>";

	?>
</body>
</html>