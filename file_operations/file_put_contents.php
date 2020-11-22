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
	file_put_contents() 	: It is using to write the specified data to specified file.It can also return how many characters writed in the end.
		
		default 		:	w mode
		FILE_APPEND 	:	a mode

	*/

	$file 	=	"folder/file.txt";
	$data 	=	"MEHMET BARAN GEYLANI\nADU\nCOMPUTER ENGINEERING";

	$write 	=	file_put_contents($file, $data , FILE_APPEND);

	if($write>0){
		echo $write . " characters writed to " . $file;
	}

	?>
</body>
</html>