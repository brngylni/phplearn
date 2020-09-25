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
	* 	:	It is using to search the values that at least 0 times.
	*/

	$Content 	=	"Migros , MMigros , MMMigros , MMMMigros , MMMMMigros";
	$Pattern 	=	"/M*/";
	preg_match_all($Pattern, $Content, $Result);

	echo "The content : " . $Content . "<br /><pre>";
	print_r($Result);
	echo "</pre>";


	?>
</body>
</html>