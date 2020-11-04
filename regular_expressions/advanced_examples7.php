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
		//Fetching the date of birth from content.
	$Content 	=	" Hi, My name is Mehmet. My website is http://www.sampr.com/index.php";
	$Pattern 	= 	"/ ?(http(s)?:\/\/.)?(www\.)?[a-zA-Z0-9\.\:\+\-\#\=\%\@]{2,256}\.[a-z]{2,6}\b([a-zA-Z0-9\.\:\+\-\#\=\%\@]*)+ ?/";
 
	preg_match_all($Pattern, $Content, $Result);

	echo "The original content : " . $Content . "<br /><pre>";
	print_r($Result);
	echo "</pre>";

	?>
</body>
</html>