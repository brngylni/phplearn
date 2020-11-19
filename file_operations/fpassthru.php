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
	fpassthru() 	:	It controlls any file's or URL's content and finds the whole content in ont time  then returns it. Values can be fetched with any loop.
	*/

	$file 		=	"https://www.google.com.tr";
	$fileOpen	=	fopen($file, "r");
	$read 		=	fpassthru($fileOpen);	
	
	echo $read;
	$fileClose 	=	fclose($fileOpen);
	?>
</body>
</html>