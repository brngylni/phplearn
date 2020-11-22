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
	file_get_contents() 	: It controlls the specified file's or URL's content at once and returns it.
	*/

	$file 	=	"https://www.sahibinden.com";
	$read 	=	file_get_contents($file);

	echo $read;
	?>
</body>
</html>