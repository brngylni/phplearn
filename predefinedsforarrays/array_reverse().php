<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>array_reverse()</title>
</head>
<body>
	<?php

	/*
	array_reverse()	:	It is using to sort the elements in which array reverse order.Also the key names will be protected if we have defined

	*/

	$Names	=	array("Mehmet", "Baran", "Kara", "Geylani");


	echo "<pre>";
	print_r($Names);
	echo "</pre><br />";

	$Process	=	array_reverse($Names);


	echo "<pre>";
	print_r($Process);
	echo "</pre>";


	?>
</body>
</html>