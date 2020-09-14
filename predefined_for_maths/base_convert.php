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
	base_convert()	 :  It calculates the binary, octal, decimal, hexedecimal equivalent of any number and returns it.	
	*/

	$Value					=	145;

	$ConvertBinary			=	base_convert($Value, 10, 2);	
	$ConvertOctal			=	base_convert($Value, 10, 8);
	$ConvertHexedecimal		=	base_convert($Value, 10, 16);

	echo "Binary equivalent of the decimal" . $Value . " number : " . $ConvertBinary . "<br />";
	echo "Octal equivalent of the decimal" . $Value . " number : " . $ConvertOctal . "<br />";
	echo "Hexedecimal equivalent of the decimal" . $Value . " number : " . $ConvertHexedecimal . "<br />";


	?>
</body>
</html>