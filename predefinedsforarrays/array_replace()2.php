<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Replace()</title>
</head>
<body>
	<?php

	/*
	array_replace()				:	It updates the element of an old array with the new array's elements and creates a new array that based on first arrays elements.
	array_replace_recursive()	:	It updates the element of an old array with the new array's elements and creates a new array that based on first arrays elements.(Advanced)
	*/

	$Names 		=	array("A1"=> "Mehmet","A2"=> "Baran", "A3"=>"Volkan","A4"=> "Hakan","A5"=> "Onur");
	$Names2		=	array("B1"=>"Aslı", "A1"=>"Banu","A4"=> "Derya");


	echo "<pre>";
	print_r($Names);
	echo "</pre><br />";

	echo "<pre>";
	print_r($Names2);
	echo "</pre><br />";

	$Conclusion		=	array_replace($Names, $Names2);

	//It can't update the elements while the key names are different.

	echo "<pre>";
	print_r($Conclusion);
	echo "</pre><br />";




	?>
</body>
</html>

	