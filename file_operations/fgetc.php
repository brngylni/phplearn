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
	$file 		=	"folder/file.txt";
	$fileOpen	=	fopen($file, "r");
	$counter 	=	0;
	while(!feof($fileOpen)){
		$read 		=	fgetc($fileOpen) . "<br />"; // We can fetch the all characters with that statement
		echo 	$read;
		$counter++;
	}
			// Save the file  as ansi coding and use iconv method for Turkish characters.

		echo $counter;
		$fileClose 	=	fclose($fileOpen);
	?>
</body>
</html>