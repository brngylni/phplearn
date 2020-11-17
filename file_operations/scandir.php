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
	scandir() 	: It is using to control the specified folder content then create an array and fill it with the file names and extensions that in folder.
	*/

	$directory 	=	"D:/xampp/htdocs/phplearn";
	$list 		=	scandir($directory, 1); // The number at the end specifies the sorting style.

	echo "<pre>";
	print_r($list);
	echo "</pre>";


	?>
</body>
</html>