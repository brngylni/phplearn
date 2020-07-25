<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Chunk()</title>
</head>
<body>
	<?php

	/*
	array_chunk 	: It is using for create a new multi-dimensional array from a older one.
	*/

	$Names		=	array("A1" => "Mehmet","A2" =>  "Baran", "A3" => "Geylani","A4" =>  "Kara", "A5" => "Kerim","A6" =>  "Rüstem","A7" =>  "Merve","A8" =>  "Berfin","A9" =>  "Çiğdem","A10" =>  "Meryem", "A11" => "Nur","A12" =>  "Hatice","A13" =>  "Musa","A14" =>  "Burak");

	echo "<pre>";
	print_r($Names);
	echo "</pre>";


	$Conclusion		=	array_chunk($Names, 3, true); //It means create a new dimension on every 3 elements.
	//True means protect the key names.

	echo "<pre>";
	print_r($Conclusion);
	echo "</pre>";



	?>
</body>
</html>

	