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
		//Fetching the date of birth from content.
	$Content 	=	" Hi, My name is Mehmet. My car's plate number is 34 XXX 34";
	$Pattern 	= 	"/ ?\d{2}\s?[A-Z]{1,3}\s?\d{2,4} ?/";
 
	preg_match($Pattern, $Content,);

	echo "The original content : " . $Content . "<br /><pre>";
	print_r($Result);
	echo "</pre>";

	?>
</body>
</html>