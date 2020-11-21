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
	fputs() 	:	It is using to write any content to specified file.It can also return how many characters writed .
	*/
	$content 		=	"Mehmet Geylani plays guitar.\n";
	$file 			=	"folder/file.txt";
	$fileOpen		=	fopen($file, "a");
	$charNum 		=	0;
	
	$totalCharNum	=	0;

	for($i = 0; $i< 100; $i++){
	$charNum		+=	fwrite($fileOpen, $content);
	}
	fclose($fileOpen);
	$fileOpen 	=	fopen($file, "r");

	while(!feof($fileOpen)){
		$chars			=	fgetc($fileOpen);
		$totalCharNum++;
	}

	echo "Added character number : " . $charNum . "<br />Total Character number : " . $totalCharNum;

	fclose($fileOpen);
	?>
</body>
</html>