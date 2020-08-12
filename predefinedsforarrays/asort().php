<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Asort()</title>
</head>
<body>
	<?php
	/*
	asort()	:	Same as "sort()" but it holds the key names.
	*/


	$Values		=	array("A1" => "Mehmet","A2"=> "Baran","A3" => "Kara", "A4" => "mehmet","A5" =>"Serkan","A6"=> "MEHMET");

	$Numbers	=	array(12, 23, 331, 4, 51, 6, 7, 12, 65, 535, 75, 34);

	echo "<pre>";
	print_r($Values);
	echo "</pre><br />";

	echo "<pre>";
	print_r($Numbers);
	echo "</pre>";

	asort($Values);
	asort($Numbers);

	echo "<pre>";
	print_r($Values);
	echo "</pre>";

	echo "<pre>";
	print_r($Numbers);
	echo "</pre>";


	?>
</body>
</html>