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
	fileinode() 	:	It is using to find the file node number of specified source.
	*/	

	$file 		=	"folder/file.txt";
	$fileinode	=	fileinode($file);

	echo $fileinode;
	?>
</body>
</html>