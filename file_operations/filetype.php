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
	filetype() 	: 	It is using to find whether the specified source is a file or a folder.	
	*/	

	$file 		=	"folder/file.txt";
	$file2 		=	"folder";
	$filetype	=	filetype($file);
	$filetype2	=	filetype($file2);

	echo $filetype . "<br />" . $filetype2;

	?>
</body>
</html>