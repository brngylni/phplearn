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

	$Value1		=	array("A1" => "Mehmet","A2" => "Baran","A3" => "Kerim","A4" => "Rüstem", "A5" =>"Berfin","A6" => "Erdem","A7" => "Eray", "A8" =>"Muhammet", "A9" =>"Erhan");
	$Value2		=	array("B1" =>"Ali", "B2" =>"Veli", "B3" =>"Aslan", "B4" =>"Kemal","B5" => "Mehmet", "B6" =>"Halil","B7" => "Mustafa","B8" => "Erdem");



	echo "<pre>";
	print_r($Value1);
	echo "</pre>";

	echo "<pre>";
	print_r($Value2);
	echo "</pre>";

	$Conclusion		=	array_intersect($Value1, $Value2);

	//Key names still protected.
	echo "<pre>";
	print_r($Conclusion);
	echo "</pre>";







	?>
</body>
</html>

	