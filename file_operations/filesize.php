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
	filesize() 	: It is using to find the size of the specified file.
	*/	

	$file 		=	"folder/file.txt";
	$filesize	=	filesize($file);

	echo $filesize;

	?>
</body>
</html>