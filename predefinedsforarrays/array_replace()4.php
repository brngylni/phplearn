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

	$Names 		=	array(array("Mehmet", "Baran"), "Volkan",array("Hakan", "Onur"));
	$Names2		=	array("Aslı", "Banu", "Derya");


	echo "<pre>";
	print_r($Names);
	echo "</pre><br />";

	echo "<pre>";
	print_r($Names2);
	echo "</pre><br />";

	$Conclusion		=	array_replace($Names, $Names2);
	//That eliminates the "array elements" of "$Names" array.
	echo "<pre>";
	print_r($Conclusion);
	echo "</pre><br />";




	?>
</body>
</html>

	