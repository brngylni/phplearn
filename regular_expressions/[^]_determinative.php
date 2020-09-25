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
	[^abc] 	: It is using to search the values that matches with the values except we specified. 
	*/

	$Text 		=	"Hello My Name Is Mehmet Geylani";
	$Pattern	=	"/[^hello]/i"; //It won't find the 'h' |'H'| 'e' |'E' |'l'| 'L'| 'o' |'O' characters.
	preg_match_all($Pattern, $Text, $Result);

	echo "Text : " . $Text . "<br /><pre>";
	print_r($Result);
	echo "</pre>";

	?>
</body>
</html>