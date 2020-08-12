<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Rsort()</title>
</head>
<body>
	<?php

	/*
	rsort()	:	It is using to sort the elements of an array "z" to "a" and it is responsive to upper-lower cases.
	*/

	$Values		=	array("A1" => "Mehmet","A2"=> "Baran","A3" => "Kara", "A4" => "mehmet","A5" =>"Serkan","A6"=> "MEHMET");

	$Numbers	=	array(1, 2, 3, 4, 5, 6, 7, 12, 65, 535, 75, 34);

	echo "<pre>";
	print_r($Values);
	echo "</pre><br />";

	echo "<pre>";
	print_r($Numbers);
	echo "</pre>";

	rsort($Values);
	rsort($Numbers);

	echo "<pre>";
	print_r($Values);
	echo "</pre>";

	echo "<pre>";
	print_r($Numbers);
	echo "</pre>";


	?>
</body>
</html>