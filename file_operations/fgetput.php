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
	fgetput()	:	It writes the specified content to specified csv file.It can also return how many characters writed.
 	*/


	$content 	=	"Mehmet,Baran,Geylani,adu,cs,20";
	$file 		=	"folder/1.csv";
	$fileOpen 	=	fopen($file, "w");

	fputcsv($fileOpen, explode(",", iconv("utf-8", "iso-8859-9", $content), ";"));

	fclose($fileOpen);


	?>
</body>
</html>