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
	+ 	:	It is using to search the values that repeated at least 1 time.
	*/

	$Content 	=	"Migros , MMigros , MMMigros , MMMMigros , MMMMMigros";
	$Pattern 	= 	"/M+/"; //It provides find the repeated elements as a one element.If we remove that plus from there, the preg_match_all would find the each 'M' values seperately. 
	preg_match_all($Pattern, $Content, $Result);

	echo "The content : " . $Content . "<br /><pre>";
	print_r($Result);
	echo "</pre>";


	?>
</body>
</html>