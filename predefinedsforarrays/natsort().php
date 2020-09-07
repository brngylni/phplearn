<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>natsort()</title>
</head>
<body>
	<?php
	/*
	natsort()	:	It is using to sort the elements of any array from "a" to "z" responsively upper and lower cases.
	*/

	$Images		=	array("Image1", "Image2", "Image14", "Image142", "Image273", "Image2645", "Image372", "Image3");
	$Images2		=	array("Image1", "Image2", "Image14", "Image142", "Image273", "Image2645", "Image372", "Image3");


	echo "<pre>";
	print_r($Images);
	echo "</pre>";


	echo "<pre>";
	print_r($Images2);
	echo "</pre>";



	sort($Images);
	echo "Standard sorting";
	echo "<pre>";
	print_r($Images);
	echo "</pre>";

	natsort($Images2);

	echo "Natural sorting.";
	echo "<pre>";
	print_r($Images2);
	echo "</pre>";



	?>
</body>
</html>