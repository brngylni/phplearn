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
	atan() 	:	It calculates the arc tangent of any two value from radian type then returns it.
	*/

	$Value 			=	2;
	$Value2			=	3;
	$Arctangent2	=	atan2($Value, $Value2);

	echo "Arc Tangent of " . $Value . " and " . $Value2 . " is : " . $Arctangent2;
	?>
</body>
</html>