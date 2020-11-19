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
	fgetc() 	:It controlls any file's or URL's content and find the informations character by character then returns it. Also the values in that characters can be obtained with any loop.
	
	*/
	$file 		=	"D:/xampp/htdocs/phplearn/asd.txt";
	$fileOpen	=	fopen($file, "r");

	while(!feof($fileOpen)){
		$read 		=	fgetc($fileOpen) . "<br />"; // We can fetch the all characters with that statement
		echo 	$read;
	}
			// Save the file  as ansi coding and use iconv method for Turkish characters.


		$fileClose 	=	fclose($fileOpen);
	?>
</body>
</html>