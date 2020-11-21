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
	fwrite() 	:  It is using to delete the content that coming after the specified character in a specified file.It can also return the result as a boolean value.
	*/

	$file 			=	"folder/file.txt";
	$fileOpen		=	fopen($file, "a");
	$totalCharNum	=	0;
	ftruncate($fileOpen, 3000);	// Removed whole file content.
	fclose($fileOpen);
	$fileOpen 	=	fopen($file, "r");

	while(!feof($fileOpen)){
		$chars 	=	fgetc($fileOpen);
		$totalCharNum++;
	}
	echo $totalCharNum . " characters remained.";

	?>
</body>
</html>