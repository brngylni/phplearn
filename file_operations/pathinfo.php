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
	pathinfo() 	:	It creates an array then fills it with the folder and filename of source
	*/	
	$file 	=	"folder/file.txt";
	$find 	=	pathinfo($file);
	echo "<pre>";
	print_r($find);
	echo "</pre><br />";


	$file2 	=	"folder/file.txt";
	$find2 	=	dirname($file2);
	echo "<pre>";
	print_r($find2);
	echo "</pre>";
	?>
</body>
</html>