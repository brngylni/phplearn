<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Ksort()</title>
</head>
<body>
	<?php

	/*
	ksort()	:	It is using to sort the key names of an array alphabetically.It is responsive upper-lower cases.
	//If the key names are numbers, it will sort by smaller to bigger.
	*/

	$Values	=	array("One" => "Mehmet", "Two" => "Baran", "Three" => "Kara", "Four" => "Geylani", "Five" => "Kerim", "Six" =>"Gökhan");

	echo "<pre>";
	print_r($Values);
	echo "</pre>";

	ksort($Values);
	// It can also define in a variable.

	echo "<pre>";
	print_r($Values);
	echo "</pre>";


	?>
</body>
</html>