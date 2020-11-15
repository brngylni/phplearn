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
	rename() 	: It is using to rename a file or move it. It can also return the result as a boolean value.
	*/
	$file 		=	"folder/file2.txt";
	$newname	=	"folder/renamedfile.txt";

	rename($file, $newname);// We can also change the directory names.

	?>
</body>
</html>