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
	preg_quote() : It is using to control whether the content have any special characters or not. If there is any special characters it adds '\' to special characters beginnings.

	Special Characters 	:	. | \ | + | * | ^ | $ | = | ! | '|' | ? | : | - | [] | () | {} | < | > 
	*/

	$Value 		=	"Hello how are you? / Where are you from";
	$Process	=	preg_quote($Value, "/"); //It accepts as a special character the parameter we specified.

	echo "<h1>The original content : " . $Value . "</h1><br />";
	echo "<h1>The edited content : " . $Process . "</h1><br />";



	?>
</body>
</html>