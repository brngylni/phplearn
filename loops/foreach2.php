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

	foreach($Colors as $Keyname => $Component){
		
		echo "Key Names: <strong>" . $Keyname . "</strong> Elements: " . $Component . "<br />";

	}
	?>
</body>
</html>