<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>number_format</title>
</head>
<body>
	<?php
	/*
	number_format()		:	It returns the formatted value by formatting any number in line with the parentheses to be specified.Similar with round().
	*/

	$Number 	=	123123865.7635;

	echo "Original version of the number : " . $Number . "<br />";

	$Format 	=	number_format($Number, 2, "|", "||"); // '|' is for the decimal part and the other one is for the other digits.

	echo "Formatted version of the number with brackets : " . $Format;	

	?>
</body>
</html>