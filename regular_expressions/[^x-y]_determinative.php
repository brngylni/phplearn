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
	[^x-y] 	:	It is using to find the values except the 'x-y' interval.
	*/

	$Value 		=	"Mehmet Geylani is a PHP Developer.";
	$Pattern 	=	"/[^ \.]/u";
	preg_match_all($Pattern, $Value, $Result);

	echo "The text : " . $Value . "<br /><pre>";
	print_r($Result);
	echo "</pre>";



	?>
</body>
</html>