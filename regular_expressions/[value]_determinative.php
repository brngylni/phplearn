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
	[abc] 	: It is using to search the values that matches with one of the specified characters.
	*/

	$Text 		=	"Hello My Name Is Mehmet Geylani";
	$Pattern 	=	"/[ylm]/i"; 
	preg_match_all($Pattern, $Text, $Result);

	echo "The content : " . $Text . "<br /><pre>";
	print_r($Result);
	echo "</pre>";



	?>
</body>
</html>