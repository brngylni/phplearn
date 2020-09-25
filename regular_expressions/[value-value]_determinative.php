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
	[x-y] 	: It is using to search the specified character interval. example : [0-9] , [a-z]
	*/


	$Text 		=	"Hello My Name Is Mehmet Geylani. My Mother's Name Is Çiğdem.";
	$Pattern 	=	"/[a-zA-ZığüşöçİĞÜŞÖÇ]/u";
	preg_match_all($Pattern, $Text, $Result);

	echo "Text : " . $Text . "<br /><pre>";
	print_r($Result);
	echo "</pre>";


	?>
</body>
</html>