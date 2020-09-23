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
	preg_grep() 	:  It is using to control any array's content by the given parameters.If there would any match, it would return the matched values as an array.
	*/

	$Content 	=	array(22, 11, 143, 252, 82, 104);
	$Content2	=	array("Mehmet", "Geylani", "Baran", "Kara", "Kerim");
	$Pattern 	=	"/2/";
	$Pattern2 	=	"/K/";
	$Result 	=	preg_grep($Pattern, $Content); //Key names would be protected.
	$Result2	=	preg_grep($Pattern2, $Content2);

	echo "The original version of array :<br /> <pre>";
	print_r($Content);
	echo "</pre><br />";

	echo "The array that consist matched values : <br /><pre>";
	print_r($Result);
	echo "</pre>";

	echo "The original version of array :<br /> <pre>";
	print_r($Content2);
	echo "</pre><br />";

	echo "The array that consist matched values : <br /><pre>";
	print_r($Result2);
	echo "</pre>";


	?>
</body>
</html>