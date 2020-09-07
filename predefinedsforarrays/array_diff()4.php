<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Array_Diff</title>
</head>
<body>
	<?php

	/*
	array_diff()		: It is using for create a new array from different elements in which different arrays.
	array_diff_key()	: It is using for create a new array from different elements of different arrays which have different kay names.
	array_diff_assoc    :It is using for create a new array from different elements of different arrays which have different kay names and element values.
	*/


	$Color		=	array("Black", "White", "Red", "Yellow", "Blue", "Grey", "Claret Red", "Green");
	$Color2		=	array("Pink", "Black", "Dark Blue","Yellow", "Blue", "Grey", "Claret Red");


	echo "<pre>";	
	print_r($Color);
	echo "</pre><br />";	


	echo "<pre>";	
	print_r($Color2);
	echo "</pre><br />";
	//First entered arrays elements will be took as a base everytime.
	$Colors		=	array_diff_assoc($Color, $Color2);

	//It will take the elements of the "$Color" array which has a different kay names or elemet value from "$Color2" arrays elements.
	echo "<pre>";	
	print_r($Colors);
	echo "</pre>";
	//Key names protected.








	?>
</body>
</html>

	