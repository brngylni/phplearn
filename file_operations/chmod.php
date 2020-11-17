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
	chmod() 	:	It is using to edit file permissions.Also it can return the result as a boolean value.
	*/
 	
 	$file 			=	"folder/file.txt";
 	$permissions 	=	fileperms($file); // Finding current permissions

 	echo "Permission value : " . $permissions . "<br />";

 	$format 		=	substr(sprintf("%o", $permissions), -4); // Formatting
 	
 	echo $format . "<br />";

 	chmod($file, 0777);


	echo $format;
	?>
</body>
</html>