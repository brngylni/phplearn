<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title></title>
</head>
<body>
	<?php
	/*
	foreach		:	It starts a loop process for arrays.
	
	Structure :
	foreach(Array variable as Variable for key name assigning  => Variable for element name assigning){
		Code Blocks
	}
	*/

	$Colors 	=	array("Mavi" => "Blue", "Yeşil" => "Yellow","Siyah" => "Black","Kırmızı" => "Red", "Gri" =>"Gray","Bordo" => "Burgundy");

	echo "<pre>";
	print_r($Colors);
	echo "</pre>";

	echo "<br /><br />";

	echo $Colors[0] . "<br />"; //Another way to print any arrays any element.
	echo $Colors[1] . "<br />";
	echo $Colors[2] . "<br />";
	echo $Colors[3] . "<br />";

	echo "<br /><br />";

	foreach($Colors as $Component){
		echo $Component . "<br />";
	}
	?>
</body>
</html>