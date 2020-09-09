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
	hexdec() 	: It converts any hexedecimal value to decimal number.
	*/

	$Number 			=	91;
	$Conversation		=	hexdec($Number);

	echo "Decimal version of " . $Number . " is : " . $Conversation;
	?>
</body>
</html>