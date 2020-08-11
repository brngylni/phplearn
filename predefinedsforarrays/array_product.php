<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>array_product()</title>
</head>
<body>
	<?php

	/*
	array_product()		:	It is usinsg to find the multiplication of all numeric elements of an array.
	*/

	 $Numbers	=	array(2, 5, 6, 12, 64, 23, 0.56, 92.6);

	 echo "<pre>";
	 print_r($Numbers);
	 echo "<pre>";

	 $multiplication		=	array_product($Numbers);

	 echo "The multiplication of the all elements of array : ". $multiplication;



	?>
</body>
</html>