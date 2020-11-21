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
	fseel() 	:	It is using to change the location that the file will be read from.
	*/

	$file 		=	"D:/xampp/htdocs/phplearn/file_operations/folder/file.txt";
	$fileOpen 	=	fopen($file, "r");

	$location 	=	ftell($fileOpen);

	echo "Location : " . $location . "<br />";
	fseek($fileOpen, 7);
	$location 	=	ftell($fileOpen);
	echo "Location : " . $location . "<br />";
	$read 	=	fpassthru($fileOpen);

	echo $read;
	fclose($fileOpen);
	?>
</body>
</html>