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
	filemtime() 	: It returns the last modification  date of the file as a Unix time stamp.
	*/	
	$file 		=	"folder/file.txt";
	$filemtime 	=	date("d.m.Y H:i:s" , filemtime($file));

	echo $filemtime;

	?>
</body>
</html>