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
	fread() 	:  	It controlls any file's or URL's content and find the informations that divided by the specified characters then returns it. Divided values can be fetched with any loop.
	 
	*/
	$file 		=	"D:/xampp/htdocs/phplearn/asd.txt";
	$fileOpen	=	fopen($file, "r");
	$read 		=	fread($fileOpen, 6); // All characters has 1 value except the Turkish characters , quotes and enters.


	echo $read;
	// Save the file  as ansi coding and use iconv method for Turkish characters.
		$fileClose 	=	fclose($fileOpen);
	?>
</body>
</html>