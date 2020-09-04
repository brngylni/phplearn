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
	boolval()		: İt returns the boolean value of any variable's content.
	intval()		: İt returns the integer value of any variable's content.
	floatval()		: İt returns the float value of any variable's content.
	doubleval()		: İt returns the double value of any variable's content.
	*/


	$Value 		=	8.55;
	$DataType	=	gettype($Value);

	echo "Content : " . $Value . "<br />";
	echo "Data Type : " . $DataType . "<br /><br />";


	echo "Content : " . intval($Value) . "<br />";

	$FinalDataType 	=	gettype($Value);

	echo "Last data type : " . $FinalDataType ."<br /> it hasn't changed as we see.";




	?>
</body>
</html>