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
	u 	:	It is using to control any content with unicode (universal code) declaration.It lets us see the special characters.
	*/

	$Text 		=	"Merhaba benim adım Mehmet Baran Geylani.Ben bir PHP yazılımcısıyım."; //It might be a Kiril alphabet or something.
	$Pattern	=	"//u"; //Unicode parameter.
	$Result 	=	preg_split($Pattern, $Text);

	echo "The original version of content : " . $Text . "<br /><pre>";
	print_r($Result);
	echo "</pre>";

	?>
</body>
</html>