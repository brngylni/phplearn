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
	(?:) 	: 	It is using to create subgroups on regular expressions.
	*/

	$Content 	=	"Hello Mehmet Geylani, Hello Ahmet Geylani, Hello Muhammet Geylani";
	$Pattern 	=	"/(?:Meh)met/"; //Difference between using '?:' and not using '?:' is the memorized data.Group data wouldn't be memorize with '?:'. It only memorizes the match.
	preg_match_all($Pattern, $Content, $Result);

	echo "The content : " . $Content . "<br /><pre>";
	print_r($Result);
	echo "</pre>";


	?>
</body>
</html>