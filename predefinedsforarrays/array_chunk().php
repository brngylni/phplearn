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

	$Names		=	array("Mehmet", "Baran", "Geylani", "Kara", "Kerim", "Rüstem", "Merve", "Berfin", "Çiğdem", "Meryem", "Nur", "Hatice", "Musa", "Burak");

	echo "<pre>";
	print_r($Names);
	echo "</pre>";


	$Conclusion		=	array_chunk($Names, 3); //It means create a new dimension on every 3 elements.


	echo "<pre>";
	print_r($Conclusion);
	echo "</pre>";



	?>
</body>
</html>

	