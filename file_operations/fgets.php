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
	fgets() 	:	It controlls any file's or URL's content and find the informations line by line then returns it.Also the values in that lines can be obtained with any loop.
	*/


	$file 		=	"D:/xampp/htdocs/phplearn/asd.txt";
	$fileOpen	=	fopen($file, "r");
	while(!feof($fileOpen)){
		$read 		=	fgets($fileOpen) . "<br />"; // We can fetch the all lines with that statement
		echo $read;
	}
	$fileClose 	=	fclose($fileOpen);
	?>
</body>
</html>