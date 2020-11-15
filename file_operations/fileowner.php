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
	fileowner() 	: It is using to find the owner of the file.
	*/	

	$file 		=	"folder/file.txt";
	$fileowner 	=	fileowner($file);

	echo $fileowner; // 0 means root/admin


	?>
</body>
</html>