<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>natcasesort()</title>
</head>
<body>
	<?php
	/*
	natcasesort()	:	Same as "natsort" but it isn't responsive to upper-lower cases.
	*/
	$Images		=	array("IMage1", "ImaGe2", "IMAge14", "ImAge142", "IMAGE273", "Image2645", "Image372", "Image3");
	$Images2		=	array("IMage1", "ImaGe2", "IMAge14", "ImAge142", "IMAGE273", "Image2645", "Image372", "Image3");


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

	natcasesort($Images2);

	echo "Natural sorting.";
	echo "<pre>";
	print_r($Images2);
	echo "</pre>";


	?>
</body>
</html>