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
	pathinfo() 	:	It finds the absolute path of the file then returns it.
	*/	
	$file 	=	"file_for_include.php";
	$find 	=	realpath($file);
	echo $find . "<br />";

	$file2 	=	"folder/file.txt";
	$find2 	=	realpath($file2);
	echo $find2;
	?>
</body>
</html>