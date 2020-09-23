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
	preg_filter()	:	It is using to control any content according to the parameters has given by us then returns as an array if there is a match.
	*/

	$Content 	=	"Hello, my name is Mehmet Kara.I am a php developer. You can find me on facebook by make a search as 'Mehmet Kara'";
	$Search 	=	array("/Mehmet/" , "/Kara/");
	$Change 	=	array("Baran" , "Geylani");
	$Result 	=	preg_filter($Search, $Change, $Content);

	echo "Original content 	: <br />" . $Content . "<br /><br />";
	echo "Edited content 	: <br />" . $Result . "<br /><br />";

	$Content2 	=	array(22, 31, 21, 32.32, "23:43:43");
	$Search2 	=	array("/2/", "/\./", "/:/");
	$Change2	=	array("1", ",", "-");
	$Result2 	=	preg_filter($Search2, $Change2, $Content2);

	echo "Original content : <br />";
	echo "<pre>";
	print_r($Content2);
	echo "</pre><br />We converted all '2' numbers to '1' number.<br /><pre>Edited content : <br />";
	print_r($Result2);
	echo "</pre>";


	?>
</body>
</html>