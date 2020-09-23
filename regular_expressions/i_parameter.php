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
	i(ignore) 	: It provides to control any content by the case insensitivity.
	*/

	$Value 		=	"Hello, my name is Mehmet Geylani. I am a PHP developer. You can find me on facebook by the searching as Mehmet Geylani.";
	$Pattern 	=	"/mehmet/i"; //ignore case.
	$Change 	=	"Baran";

	preg_match_all($Pattern, $Value, $Result);

	$Result2 	=	preg_replace($Pattern, $Change, $Value);

	echo "The original version of content : " . $Value . "<br />Returned array : <br /><pre>";
	print_r($Result);
	echo "</pre>";

	echo "The content that edited by preg_replace : " . $Result2;
	?>
</body>
</html>