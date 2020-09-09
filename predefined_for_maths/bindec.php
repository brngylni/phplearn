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
	bindec() 	: It converts any binary value to decimal number.
	*/

	$Number 			=	10010001; //Note: We can't write "0" to first digit.Just don't write it or write the whole value as a string.
	$Convertation		=	bindec($Number);

	echo "Decimal version of " . $Number . " is : " . $Conversation;

	?>
</body>
</html>