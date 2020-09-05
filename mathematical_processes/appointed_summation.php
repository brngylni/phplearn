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

	$Value				=	10;
	$AdditionalValue	= 	20;

	echo $Value . " + " . $AdditionalValue . " = " ;

	$Value 				+= 	$AdditionalValue; //It adds the '$AdditionaLValue' 's value to '$Value' s value.

	echo $Value . "<br /><br />";

	$Value2		=	10;

	echo $Value2 . " + 100 = " ;

	$Value2		+= 100;

	echo $Value2;

	?>
</body>
</html>