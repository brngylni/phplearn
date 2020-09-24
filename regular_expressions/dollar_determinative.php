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
	$ 	=	It is using to catch matches between end of character string of content and regular expression.
	*/

	$Content 	=	"Lecture subject : PHP.";
	$Pattern 	=	"/PHP$/"; //This means search the 'PHP' value at the end of content.
	preg_match($Pattern, $Content, $Result);

	echo "The original content : " . $Content . "<br />";
	echo "The pattern : " . $Pattern . "<br /><pre>";
	print_r($Result);
	echo "</pre><br />Dot is the last element of content.	";


	$Content2	=	"Lecture subject : PHP";
	$Pattern2 	=	"/PHP$/"; //This means search the 'PHP' value at the end of content.
	preg_match($Pattern2, $Content2, $Result2);

	echo "The original content : " . $Content2 . "<br />";
	echo "The pattern : " . $Pattern2 . "<br /><pre>";
	print_r($Result2);
	echo "</pre>";

	?>
</body>
</html>