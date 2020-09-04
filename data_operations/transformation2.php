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
	(boolean) & (bool)				: Convert to logical data type.
	(integer) & (int) 				: Convert to integer data type.
	(float) & (double) & (real) 	: Convert to decimal number data type.
	(string) 						: Convert to alphanumerical data type.
	(array) 						: Convert to array data type.
	(object) 						: Convert to object data type.
	(unset)							: Convert to null data type.
	*/

	$Value1		=	123.412;
	$DataType1	=	gettype($Value1);

	echo "Content of first data : " . $Value1 . "<br />";
	echo "Data type of first data : " . $DataType1 . "<br /><br />";

	$Value2		=	(object) 123.412;
	$DataType2	=	gettype($Value2);

	echo "Content of first data : " . $Value2->scalar . "<br />";
	echo "Data type of first data : " . $DataType2 . "<br />";
	?>
</body>
</html>