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
	\w 	:	It is using to find the numbers , underscores and letters.
	\W 	:	It is using to find values that except the numbers, underscores and letters.
	*/

	$Pattern1 	= "/\w/u";
	$Pattern2 	= "/\W/u";
	$Content 	= "Hello, my name is Mehmet Baran Geylani. I am a CS student.My mail adress is : barankara_2000@gmail.com";

	preg_match_all($Pattern1, $Content, $Result1);
	preg_match_all($Pattern2, $Content, $Result2);

	echo "This is the original content : " . $Content;

	echo "This is the result of \w : <pre>";
	print_r($Result1);
	echo "</pre>";

	echo "This is the result of \W : <pre>";
	print_r($Result2);
	echo "</pre>";


	?>
</body>
</html>