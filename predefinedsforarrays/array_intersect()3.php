<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Intersect()</title>
</head>
<body>
	<?php

	/*
	array_intersect()			: It is using for create a new array from an old arrays same elements. 
	array_intersect_key()		: It is using for create a new array from an old arrays components which has a same key names.
	array_intersect_assoc()		: It is using for create a new array from an old arrays components which has a same key and element value.
	
	*/

	$Value1		=	array("Mehmet", "Baran", "Kerim", "Rüstem", "Berfin", "Erdem", "Eray", "Muhammet", "Erhan");
	$Value2		=	array("Ali", "Veli", "Aslan", "Kemal", "Mehmet", "Halil", "Mustafa", "Erdem");



	echo "<pre>";
	print_r($Value1);
	echo "</pre>";

	echo "<pre>";
	print_r($Value2);
	echo "</pre>";

	$Conclusion		=	array_intersect_key($Value1, $Value2);

	//Key names protected.
	echo "<pre>";
	print_r($Conclusion);
	echo "</pre>";







	?>
</body>
</html>

	