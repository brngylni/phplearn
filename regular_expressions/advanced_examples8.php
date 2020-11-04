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
		//E-mail catching.
	$Content 	=	" Hi, My name is Mehmet. My e-mail adress is barankara5@gmail.com";
	$Pattern 	= 	"/ (\w+)@([a-z]+)\.([a-z]{2,})(\.[a-z]{2}|) ?/";
 
	preg_match_all($Pattern, $Content, $Result);

	echo "The original content : " . $Content . "<br /><pre>";
	print_r($Result);
	echo "</pre>";

	?>
</body>
</html>