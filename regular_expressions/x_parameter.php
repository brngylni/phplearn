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
	x 	:  It is using to control any content by ignoring the space in the pattern.	IT ONLY IGNORES THE SPACE IN THE PATTERN, CAN'T DO ANYTHİNG TO SPACE IN THE CONTENT.
	*/

	$Text 		=	"Mehmet Geylani, PHP Student.";
	$Pattern 	=	"/P H P/x"; //It can't catch any match without 'x' parameter.
	preg_match($Pattern, $Text, $Result);

	echo "The original content : " . $Text . "<br />";
	echo "The pattern : " . $Pattern . "<br />";
	echo "The new content : <br /><pre>";
	print_r($Result);
	echo "</pre>";



	?>
</body>
</html>