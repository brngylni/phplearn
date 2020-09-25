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
	{x,} 	: It is using to search the values that repeated at least 'x' times.
	*/

	$Content 	= "Migros - MMigros - MMMigros - MMMMigros - MMMMMigros ";
	$Pattern 	=	"/M{4,}/"; //It means find the M values which repeated at least 4 times.
	preg_match_all($Pattern, $Content, $Result);

	echo "The content : " . $Content . "<br /><pre>";
	print_r($Result);
	echo "</pre>";

	?>
</body>
</html>