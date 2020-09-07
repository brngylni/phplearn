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
	mt_rand() 		:	Same as rand but uses mersenne twister algorithm.
	*/


	$NumberGenerator	=	mt_rand(0 , 100);

	echo "Random generated number with using mersenne twister algorithm : " . $NumberGenerator;
	?>
</body>
</html>