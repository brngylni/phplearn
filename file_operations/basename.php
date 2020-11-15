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
	basename() 	:	It is using to find the filename of source then returns it.
	*/	

	$file 	=	"file_for_include.php";
	$find 	=	basename($file);
	echo $find . "<br />";

	$file2 	=	"folder/file.txt";
	$find2 	=	basename($file2);
	echo $find2;
	?>
</body>
</html>