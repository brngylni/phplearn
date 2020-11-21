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
	
	$url 		=	"https://www.google.com";
	$readUrl	=	file($url);
	$content 	= "";
	foreach($readUrl as $value){
		$content 	.=	$value;
	}

	$file 		=	"folder/file.txt";
	$fileOpen	=	fopen($file, "w");
	$result 	=	fwrite($fileOpen, $content);

	fclose($fileOpen);


	?>
</body>
</html>