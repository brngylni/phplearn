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
	{x,y} 	: It is using to search the values that repeated at least x and max y times. 
	*/

	$Content 	=	"1 11 111 1111 11111 111111 1111111 11111111 11111111";
	$Pattern 	=	"/1{3,6}/";
	preg_match_all($Pattern, $Content, $Result);

	echo "The content : " . $Content . "<br /><pre>";
	print_r($Result);
	echo "</pre>";

	?>
</body>
</html>