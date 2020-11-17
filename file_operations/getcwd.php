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
	getcwd() 	:	It returns the current directory.
	chdir() 	:	It provides making traversals between directories.
	*/

	$directory 	=	getcwd();

	echo $directory . "<br />";

	chdir("D:/xampp/htdocs/phplearn/");
	$directory 	=	getcwd();
	
	echo $directory;



	?>
</body>
</html>