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
	fgetcsv()	:	It controlls the specified csv file then returns it line by line.We can fetch the all lines with a loop.
 	*/

	$file 		=	"folder/1.csv";
	$fileOpen	=	fopen($file, "r");


	while($solve=fgetcsv($fileOpen))
		$read 	=	$solve[0];
		$edit 	=	iconv("latin5", "utf-8", $read);

		echo $edit;
	fclose($fileOpen);

	?>
</body>
</html>