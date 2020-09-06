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

	$Number 	=	865.7635;

	echo "Original version of the number : " . $Number . "<br />";

	$Format 	=	number_format($Number);

	echo "Formatted version of the number : " . $Format;	

	?>
</body>
</html>