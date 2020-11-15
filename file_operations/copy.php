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
	copy() 	: 	It is using to copy a file.It can also return the result as a boolean value.
	*/

	$file 		=	"folder/file.txt";
	$copyfile	=	"folder/filecopy.txt";
	copy($file, $copyfile);

	?>
</body>
</html>