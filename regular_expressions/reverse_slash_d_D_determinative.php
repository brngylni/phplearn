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
	\d 	:	It is using to find the numeric characters.
	\D 	:	It is using to find the characters except numbers.
	*/

	$Pattern1 	=	"/\d/u";
	$Pattern2 	= 	"/\D/u";
	$Content 	= 	"Hi, my name is Mehmet Baran Geylani. I am a CS student.My phone number is : 05423139870";
	preg_match_all($Pattern1, $Content, $Result1);
	preg_match_all($Pattern2, $Content, $Result2);

	echo "This is the original content : " . $Content . "<br />This is the result of \d : <br /><pre>";
	print_r($Result1);
	echo "</pre><br />This is the result of \D : <br /><pre> ";
	print_r($Result2);
	echo "</pre>";






	?>
</body>
</html>