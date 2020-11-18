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
	opendir() 	:	It is using to open a directory and take it to memory.
	
	readdir() 	: It is using to read the folder that in memory and opened by opendir.

	closedir() 	: It is using to close a direction and free the memory.
	*/

	$directory 		=	"D:/xampp/htdocs/phplearn/";
	$directoryOpen 	=	opendir($directory);

	while(($read = readdir($directoryOpen)) != false){
		echo "File name : " . $read . "<br />Type : " . filetype($directory.$read) . "<br />"; 
	
	}
	$directoryClose  =	closedir($directoryOpen);


	?>
</body>
</html>