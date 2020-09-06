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
	round()		:	It rounds any decimal number to the closest number to it.
	*/

	$Value1		=	8.01;
	$Value2		=	8.99;

	echo "Rounded value of '8.01' with using round() is : " . round($Value1) . "<br />";
	echo "Rounded value of '8.99' with using round() is : " . round($Value2);

	echo "<br />It always care about the first digit of decimal part when we wouldn't define any parameters.";

	?>
</body>
</html>