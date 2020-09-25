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
	() 		: It is using to define groups in regular expressions.		
	(x|y) 	: It is using to search the values that matches with either x or y.
	*/

	$Content 	=	"Mehmet, Ahmet , Muhammet";
	$Pattern 	=	"/(M)(e)(h)(m)(e)(t)/"; //It would catch the whole characters seperately and also the group that consist that characters.
	$Pattern2 	=	"/(Meh|Ah)met/"; //Actually it makes a 4 search at the same time.It would searches the 'Meh' , 'Ah', 'Ahmet', 'Mehmet' . 
	preg_match_all($Pattern, $Content, $Result);

	echo "The content : " . $Content . "<br /><pre>";
	print_r($Result);
	echo "</pre><br />";

	preg_match_all($Pattern2, $Content, $Result2);

	echo "The content : " . $Content . "<br /><pre>";
	print_r($Result2);
	echo "</pre>";
	?>
</body>
</html>