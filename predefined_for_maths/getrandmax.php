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
	getrandmax()		:	It returns the maximum value which can be returned by the rand() .
	*/

	$Maxrand		=	getrandmax();

	echo "Maximum value that can be generated with rand() method is : " . $Maxrand;


	?>
</body>
</html>