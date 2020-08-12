<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Arsort()</title>
</head>
<body>
	<?php

	/*
	arsort()	:	Same as "rsort()" but it holds the key names.
	*/

	$Values		=	array("A1" => "Mehmet","A2"=> "Baran","A3" => "Kara", "A4" => "mehmet","A5" =>"Serkan","A6"=> "MEHMET");

	$Numbers	=	array(31, 12, 32, 34, 25, 612, 7112, 65, 535, 75, 324);

	echo "<pre>";
	print_r($Values);
	echo "</pre><br />";

	echo "<pre>";
	print_r($Numbers);
	echo "</pre>";

	arsort($Values);
	arsort($Numbers);

	echo "<pre>";
	print_r($Values);
	echo "</pre>";

	echo "<pre>";
	print_r($Numbers);
	echo "</pre>";

	?>
</body>
</html>