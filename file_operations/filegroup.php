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
	filegroup() 	:	It is using to find the owner group of the file.
	*/	

	$file 		=	"folder/file.txt";
	$filegroup	=	filegroup($file);

	echo $filegroup;

	?>
</body>
</html>