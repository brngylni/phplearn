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
	clearstatcache() 	: It clears the memory.	
	*/
	$file 		=	"folder/file.txt";
	$filestat	=	stat($file);

	echo "<pre>";
	print_r($filestat);
	echo "</pre>";

	clearstatcache();



	?>
</body>
</html>