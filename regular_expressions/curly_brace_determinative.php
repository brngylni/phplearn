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
	{x} 	:	 It is using to search the value that repeated 'x' times.
	*/

	$Content 	=	"Mehmet Geylani - Geylani Software 2020 -- PHP Student --- Guitarist";
	$Pattern 	=	"/-{3}/"; //It would find only the '---' value at the end.
	preg_match_all($Pattern, $Content, $Result);

	echo "The content : ". $Content . "<br /><pre>";
	print_r($Result);
	echo "</pre>";


	?>
</body>
</html>	