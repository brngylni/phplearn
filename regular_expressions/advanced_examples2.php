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
		//Fetching the phone numbers from content.
	$Content 	=	"Hi, My Name is Mehmet Geylani. You can reach me by that number : 05423139870";
	$Pattern 	= 	"/ 0?\s?[0-9]{3}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2} ?/";

	preg_match($Pattern, $Content, $Result);
	
	echo $Content . "<br /><pre>";
	print_r($Result);
	echo "</pre>";


	?>
</body>
</html>