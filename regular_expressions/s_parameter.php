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
	s 	: It allows us to control the more than one lines for the contents that have more than one lines.Takes the lines as 1 line.
	*/

	$Content 	= 	"Hello my name is Mehmet Geylani,
	 ı am a PHP developer.
	 You can find me on facebook.";
	$Pattern 	=	"/.*/s";//It would create new keys in array for each space or each indent without s parameter.
	preg_match_all($Pattern, $Content, $Result);

	echo "The original content : " . $Content . "<br /><br /><pre>";
	print_r($Result);
	echo "</pre>";


	?>
</body>
</html>