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
	fileperms()		: 	It is using to file access permition value of specified source.
	*/	
	$file 		=	"folder/file.txt";
	$fileperms	=	fileperms($file);

	echo $fileperms;

	?>
</body>
</html>