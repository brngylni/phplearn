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
	\s 	:	It is using to find space's
	\S 	:	It is using to find the characters except space.
	*/

	$Pattern1 	=	"/\s/";
	$Pattern2 	=	"/\S/";
	$Content 	=	"Hi, my name is Mehmet Baran Geylani.I am a CS student.";
	preg_match_all($Pattern1 , $Content, $Result1);
	preg_match_all($Pattern2, $Content, $Result2);

	echo "This is the original content : <br />" . $Content . "<br />";

	echo "This is the result of \s : <br /><pre>";
	print_r($Result1);
	echo "</pre><br />This is the result of \S : <br /><pre>";
	print_r($Result2);
	echo "</pre>";



	?>
</body>
</html>