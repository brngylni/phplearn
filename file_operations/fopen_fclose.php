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
	fopen() 	:	It is using to open the specified URL or file according to specified mode.It can also return the result as a boolean.
	fclose() 	:	It is using to close the specifed URL or file that opened by fopen().It can also return the result as a boolean.
	
	Modes 	:

	r 	: Just reading
	r+	: Reading + writing
	w 	: Writing (It removes the file content and writes in again.If the file is not exists, creates it.)
	w+ 	: Writing + Reading
	a 	: Writing (It not changes the existing data.Just adds to end.If the file is no exists, creates it.)
	a+ 	: Writing + Reading
	x 	: Writing (If the file is not exists, fopen returns false then creates errors.)
	x+ 	: Writing + Reading
	*/




	$directory = 	"D:/xampp/htdocs/phplearn/*";
	$list 		=	glob($directory, GLOB_MARK);

	echo "<pre>";
	print_r($list);
	echo "</pre>";

	$file 		=	"../asd.txt";
	$fileOpen	=	fopen($file, "r");

	if($fileOpen == true ){
		echo "File opened<br />";
	}else{
		echo "File couldn't open<br />";
	}

	$fileClose 	=	fclose($fileOpen);
	
	if($fileClose == true ){
		echo "File closed<br />";
	}else{
		echo "File couldn't closed<br />";
	}





	?>
</body>
</html>