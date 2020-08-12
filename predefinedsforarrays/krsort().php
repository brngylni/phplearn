<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Krsort()</title>
</head>
<body>
	<?php
	/*
	krsort()	:	It is using to sort the key names of an array reversed-alphabetically.
	*/


	$Values	=	array("One" => "Mehmet", "Two" => "Baran", "Three" => "Kara", "Four" => "Geylani", "Five" => "Kerim", "Six" =>"Gökhan");

	echo "<pre>";
	print_r($Values);
	echo "</pre>";

	krsort($Values);
	// It can also define in a variable.

	echo "<pre>";
	print_r($Values);
	echo "</pre>";





	?>
</body>
</html>