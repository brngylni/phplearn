<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Sort()</title>
</head>
<body>
	<?php

	/*
	sort()	:	It is using to sort the elements of an array "a" to "z" and it is responsive to upper-lower cases.Upper-cases always comes first.
	*/


	$Values		=	array("A1" => "Mehmet","A2"=> "Baran","A3" => "Kara", "A4" => "mehmet","A5" =>"Serkan","A6"=> "MEHMET");

	$Numbers	=	array(21, 2, 33, 421, 52, 36, 72, 112, 65, 535, 75, 34);

	echo "<pre>";
	print_r($Values);
	echo "</pre><br />";

	echo "<pre>";
	print_r($Numbers);
	echo "</pre>";

	sort($Values);
	sort($Numbers);

	echo "<pre>";
	print_r($Values);
	echo "</pre>";

	echo "<pre>";
	print_r($Numbers);
	echo "</pre>";

	?>
</body>
</html>