<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>array_sum()</title>
</head>
<body>
	<?php

	/*
	 array_sum()	:	It is using to find the sumation of all numeric elements of an array.
	*/

	 $Numbers	=	array(2, 5, 6, 12, 64, 23, 0.56, 92.6);

	 echo "<pre>";
	 print_r($Numbers);
	 echo "<pre>";

	 $sumation		=	array_sum($Numbers);

	 echo "The sumation of the all elements of array : ". $sumation;


	?>
</body>
</html>