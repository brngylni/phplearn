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
	\b 	:	It is using to search text parts that appropriate to regular expression at the beginning or the end of content.
	\B 	:	It is using to search text parts that appropriate to regular expression in the content.
	*/
	$Content 	=	"Mehmet , Baran , Kara , Geylani , Kerim";
	$Pattern 	=	"/\bra/"; //It means the 'ra' value always have to be at the beginning of the words.Simply, the words that starts with 'ra'.
	$Result 	=	preg_match($Pattern, $Content);

	echo "The original content : " . $Content . "<br />";
	echo "The pattern : " . $Pattern . "<br />";
	echo "The result : " . $Result . "<br />";

	$Content2 	=	"Mehmet , Baran , Kara , Geylani , Kerim";
	$Pattern2 	=	"/ra\b/"; //It means the 'ra' value always have to be at the end  of the words.Simply, the words that finishes with 'ra'.
	preg_match_all($Pattern2, $Content2, $Result2);

	echo "The original content : " . $Content2 . "<br />";
	echo "The pattern : " . $Pattern2 . "<br />";
	echo "The result : <br /><pre>";
	print_r($Result2);
	echo "</pre><br />";

	$Content3 	=	"Mehmet , Baran , Kara , Geylani , Kerim";
	$Pattern3 	=	"/ra\B/"; //It means the 'ra' values mustn't be at the beginning or end of the words.Simply, the words that either not finishes or starts with 'ra'.If we write the \b on the beginning of pattern, it will take the space characters as the finish of words.
	preg_match_all($Pattern3, $Content3, $Result3);

	echo "The original content : " . $Content3 . "<br />";
	echo "The pattern : " . $Pattern3 . "<br />";
	echo "The result : <br /><pre>";
	print_r($Result3);
	echo "</pre>";



	?>
</body>
</html>