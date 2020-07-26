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


	$Color		=	array("A1" => "Black","A2" =>  "White","A3" =>  "Red","A4" =>  "Yellow","A5" =>  "Blue","A6" =>  "Grey", "A7" => "Claret Red","A8" =>  "Green");
	$Color2		=	array("A4" => "Pink", "Amaranth","B2" =>  "Dark Blue","B3" => "Yellow","B4" =>  "Blue","B5" =>  "Grey","B6" =>  "Claret Red");


	echo "<pre>";	
	print_r($Color);
	echo "</pre><br />";	


	echo "<pre>";	
	print_r($Color2);
	echo "</pre><br />";

	$Colors		=	array_diff_key($Color, $Color2);

	//It will take the elements of the "$Color" array which has a different key names from "Color2" arrays elements.
	echo "<pre>";	
	print_r($Colors);
	echo "</pre>";
	//Key names protected.








	?>
</body>
</html>

	