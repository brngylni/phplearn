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
	mt_getrandmax() 		:	It returns a maximum value that can be generated with mt_rand() method.
	*/


	$MaxRandMT		=	mt_getrandmax();

	echo "Maximum value that can be generated with mt_rand() : " . $MaxRandMT;

	?>
</body>
</html>