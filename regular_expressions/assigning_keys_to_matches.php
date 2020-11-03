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

	$Content 	= 	"Mehmet Geylani";
	$Pattern 	=	"/(?<Name>Mehmet) (?<Surname>Geylani)/";
	preg_match_all($Pattern, $Content, $Result);

	echo "This is the original content : " . $Content . "<br />";
	echo "<pre>";
	print_r($Result);
	echo "</pre>";


	?>
</body>
</html>