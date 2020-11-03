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
	.  : It is using to find any character except the new line commands like < /br> , \n.It includes the spaces.
	*/

	$Pattern = "/./u";
	$Content = "Hello, my names is Mehmet Baran Geylani. I am a CS 	student. 1+2+3*4*12=21312";

	preg_match_all($Pattern, $Content, $Results);

	echo "<pre>";
	print_r($Results);
	echo "</pre>";

	?>
</body>
</html>