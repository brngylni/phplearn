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
	feof() 	: It is using to determine if the specified file or URL is reading until the end or not.
	*/
	$file 		=	"D:/xampp/htdocs/phplearn/asd.txt";
	$fileOpen	=	fopen($file, "r"); 
	while(!feof($fileOpen)){   // Provides to know when all file's reading is finished.
		$read 		=	fgets($fileOpen) . "<br />"; // We can fetch the all lines with that statement
		echo $read;
	}
	$fileClose 	=	fclose($fileOpen);
	?>
</body>
</html>