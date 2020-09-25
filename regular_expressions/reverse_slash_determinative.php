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
	\ 	: Used to indicate that the character that follows is not a special character.
	*/
	
	$Value 		=	"Conclusion of 11+111 process is 122.";
	$Pattern 	=	"/\+/"; //We used to ignore the determinative function of '+'. 
	preg_match_all($Pattern, $Value, $Result);

	echo "The content : " . $Value . "<br /><pre>";
	print_r($Result);
	echo "</pre>";

	?>
</body>
</html>